<?php

namespace App\Providers;


use App\Models\Package;
use App\Models\User;
use App\Models\Batch;
use App\Models\Country;
use App\Models\Session;
use App\Models\Section;
use App\Models\Student;
use App\Models\Teacher;

use Illuminate\Support\ServiceProvider;
use View;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(['admin.investors.fields'], function ($view) {
            $countryItems = Country::pluck('name','name')->toArray();
            $view->with('countryItems', $countryItems);
        });
        View::composer(['admin.access_informations.fields'], function ($view) {
            $countryItems = Country::pluck('name','id')->toArray();
            $view->with('countryItems', $countryItems);
        });
        View::composer(['admin.manners.fields'], function ($view) {
            $batchItems = Batch::pluck('name','id')->toArray();
            $view->with('batchItems', $batchItems);
        });
        View::composer(['admin.manners.fields'], function ($view) {
            $sectionItems = Section::pluck('name','id')->toArray();
            $view->with('sectionItems', $sectionItems);
        });
        View::composer(['admin.manners.fields'], function ($view) {
            $teacherItems = Teacher::pluck('name','id')->toArray();
            $view->with('teacherItems', $teacherItems);
        });
        View::composer(['admin.questions.fields'], function ($view) {
            $batchItems = Batch::pluck('name','id')->toArray();
            $view->with('batchItems', $batchItems);
        });
        View::composer(['admin.questions.fields'], function ($view) {
            $sectionItems = Section::pluck('name','id')->toArray();
            $view->with('sectionItems', $sectionItems);
        });
        View::composer(['admin.questions.fields'], function ($view) {
            $teacherItems = Teacher::pluck('name','id')->toArray();
            $view->with('teacherItems', $teacherItems);
        });
        View::composer(['admin.channels.fields'], function ($view) {
            $batchItems = Batch::pluck('name','id')->toArray();
            $view->with('batchItems', $batchItems);
        });
        View::composer(['admin.channels.fields'], function ($view) {
            $sectionItems = Section::pluck('name','id')->toArray();
            $view->with('sectionItems', $sectionItems);
        });
        View::composer(['admin.channels.fields'], function ($view) {
            $teacherItems = Teacher::pluck('name','id')->toArray();
            $view->with('teacherItems', $teacherItems);
        });
        View::composer(['admin.duas.fields'], function ($view) {
            $batchItems = Batch::pluck('name','id')->toArray();
            $view->with('batchItems', $batchItems);
        });
        View::composer(['admin.duas.fields'], function ($view) {
            $sectionItems = Section::pluck('name','id')->toArray();
            $view->with('sectionItems', $sectionItems);
        });
        View::composer(['admin.duas.fields'], function ($view) {
            $teacherItems = Teacher::pluck('name','id')->toArray();
            $view->with('teacherItems', $teacherItems);
        });
        View::composer(['admin.class_notes.fields'], function ($view) {
            $batchItems = Batch::pluck('name','id')->toArray();
            $view->with('batchItems', $batchItems);
        });
        View::composer(['admin.class_notes.fields'], function ($view) {
            $sectionItems = Section::pluck('name','id')->toArray();
            $view->with('sectionItems', $sectionItems);
        });
        View::composer(['admin.class_notes.fields'], function ($view) {
            $teacherItems = Teacher::pluck('name','id')->toArray();
            $view->with('teacherItems', $teacherItems);
        });
        View::composer(['admin.notices.fields'], function ($view) {
            $batchItems = Batch::pluck('name','id')->toArray();
            $view->with('batchItems', $batchItems);
        });
        View::composer(['admin.notices.fields'], function ($view) {
            $sectionItems = Section::pluck('name','id')->toArray();
            $view->with('sectionItems', $sectionItems);
        });
        View::composer(['admin.notices.fields'], function ($view) {
            $teacherItems = Teacher::pluck('name','id')->toArray();
            $view->with('teacherItems', $teacherItems);
        });
        View::composer(['admin.home_works.fields'], function ($view) {
            $batchItems = Batch::pluck('name','id')->toArray();
            $view->with('batchItems', $batchItems);
        });
        View::composer(['admin.home_works.fields'], function ($view) {
            $sectionItems = Section::pluck('name','id')->toArray();
            $view->with('sectionItems', $sectionItems);
        });
        View::composer(['admin.home_works.fields'], function ($view) {
            $teacherItems = Teacher::pluck('name','id')->toArray();
            $view->with('teacherItems', $teacherItems);
        });
        View::composer(['admin.batches.fields'], function ($view) {
            $sectionItems = Section::pluck('name','id')->toArray();
            $view->with('sectionItems', $sectionItems);
        });
        View::composer(['admin.transactions.fields'], function ($view) {
            $packageItems = Package::pluck('name','id')->toArray();
            $view->with('packageItems', $packageItems);
        });
        View::composer(['admin.transactions.fields'], function ($view) {
            $studentItems = Student::pluck('name','id')->toArray();
            $view->with('studentItems', $studentItems);
        });
        View::composer(['admin.transactions.fields'], function ($view) {
            $userItems = User::pluck('name','id')->toArray();
            $view->with('userItems', $userItems);
        });
        View::composer(['admin.students.fields'], function ($view) {
            $countryItems = Country::pluck('name','id')->toArray();
            $view->with('countryItems', $countryItems);
        });
        View::composer(['admin.students.fields'], function ($view) {
            $batchItems = Batch::pluck('name','id')->toArray();
            $view->with('batchItems', $batchItems);
        });
        View::composer(['admin.students.fields'], function ($view) {
            $sectionItems = Section::pluck('name','id')->toArray();
            $view->with('sectionItems', $sectionItems);
        });
        View::composer(['admin.students.fields'], function ($view) {
            $countryItems = Country::pluck('name','id')->toArray();
            $view->with('countryItems', $countryItems);
        });
        View::composer(['admin.students.fields'], function ($view) {
            $batchItems = Batch::pluck('name','id')->toArray();
            $view->with('batchItems', $batchItems);
        });
        View::composer(['admin.students.fields'], function ($view) {
            $sectionItems = Section::pluck('name','id')->toArray();
            $view->with('sectionItems', $sectionItems);
        });
        View::composer(['admin.live_classes.fields'], function ($view) {
            $teacherItems = Teacher::pluck('name','id')->toArray();
            $view->with('teacherItems', $teacherItems);
        });
        View::composer(['admin.live_classes.fields'], function ($view) {
            $batchItems = Batch::pluck('name','id')->toArray();
            $view->with('batchItems', $batchItems);
        });
        View::composer(['admin.live_classes.fields'], function ($view) {
            $sectionItems = Section::pluck('name','id')->toArray();
            $view->with('sectionItems', $sectionItems);
        });
        View::composer(['admin.live_classes.fields'], function ($view) {
            $teacherItems = Teacher::pluck('name','id')->toArray();
            $view->with('teacherItems', $teacherItems);
        });
        View::composer(['admin.live_classes.fields'], function ($view) {
            $batchItems = Batch::pluck('name','id')->toArray();
            $view->with('batchItems', $batchItems);
        });
        View::composer(['admin.live_classes.fields'], function ($view) {
            $sectionItems = Section::pluck('name','id')->toArray();
            $view->with('sectionItems', $sectionItems);
        });
        View::composer(['admin.batches.fields'], function ($view) {
            $sectionItems = Section::pluck('name','id')->toArray();
            $view->with('sectionItems', $sectionItems);
        });
        View::composer(['admin.students.fields'], function ($view) {
            $countryItems = Country::pluck('name','id')->toArray();
            $view->with('countryItems', $countryItems);
        });
        View::composer(['admin.students.fields'], function ($view) {
            $countryItems = Country::pluck('name','id')->toArray();
            $view->with('countryItems', $countryItems);
        });
        View::composer(['admin.students.fields'], function ($view) {
            $countryItems = Country::pluck('name','id')->toArray();
            $view->with('countryItems', $countryItems);
        });
        View::composer(['admin.student_details.fields'], function ($view) {
            $sectionItems = Section::pluck('name','id')->toArray();
            $view->with('sectionItems', $sectionItems);
        });
        View::composer(['admin.student_details.fields'], function ($view) {
            $studentItems = Student::pluck('name','id')->toArray();
            $view->with('studentItems', $studentItems);
        });
        View::composer(['admin.student_details.fields'], function ($view) {
            $sectionItems = Section::pluck('name','id')->toArray();
            $view->with('sectionItems', $sectionItems);
        });
        View::composer(['admin.student_details.fields'], function ($view) {
            $studentItems = Student::pluck('name','id')->toArray();
            $view->with('studentItems', $studentItems);
        });
        View::composer(['admin.sections.fields'], function ($view) {
            $teacherItems = Teacher::pluck('name','id')->toArray();
            $view->with('teacherItems', $teacherItems);
        });
        View::composer(['admin.teacher_details.fields'], function ($view) {
            $teacherItems = Teacher::pluck('name','id')->toArray();
            $view->with('teacherItems', $teacherItems);
        });
        //
    }
}