<?php

namespace App\Providers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('qa.display', function ($view) {
            $section = $view->section;
            $title = $view->title ?? ucfirst($section);

            $allFaqs = DB::table('qa')
                ->join('qa_section', 'qa.qa_section_id', '=', 'qa_section.qa_section_id')
                ->where('qa_section.qa_section_code', $section)
                ->where('qa_active', true)
                ->orderBy('qa_id')
                ->get(['qa_title', 'qa_text', 'qa_id']);

            // Podział na dwie równe części
            $count = $allFaqs->count();
            $splitAt = ceil($count / 2);
            $leftFaqs = $allFaqs->slice(0, $splitAt);
            $rightFaqs = $allFaqs->slice($splitAt);

            $view->with(compact('title', 'leftFaqs', 'rightFaqs'));
        });

        if (env('APP_ENV') !== 'production') {
            Mail::alwaysTo(env('MAIL_SEND_TO_TEST'));
        }
    }
}
