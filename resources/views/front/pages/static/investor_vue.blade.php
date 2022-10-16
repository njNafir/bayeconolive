@section('title') Request For Invest @stop
@extends('front.layout.master-inner')
@section('content-inner')
    <!-- START SECTION CONTACT US -->
    <section class="contact-us">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col col-lg-10 col-lg-offset-2">
                    <h3 class="mb-4">Request For Invest</h3>
                    @include('components.errors')

                    <form action="/investor/store" method="post" enctype='multipart/form-data'>
                        <div class="row">
                            <!-- Tracking No Field -->
                            <div class="col-md-4 col-sm-4 col-12">
                                <div class="form-group">
                                    {!! Form::label('tracking_no', 'Tracking No:') !!}
                                    {!! Form::text('tracking_no', null, ['class' => 'form-control']) !!}
                                </div>
                            </div>

                            <!-- Date Of Submission Field -->
                            <div class="col-md-4 col-sm-4 col-12">
                                <div class="form-group">
                                    {!! Form::label('date_of_submission', 'Date Of Submission:') !!}
                                    {!! Form::date('date_of_submission', null, ['class' => 'form-control','id'=>'date_of_submission']) !!}
                                </div>
                            </div>

                            @push('scripts')
                                <script type="text/javascript">
                                    $('#date_of_submission').datetimepicker({
                                        format: 'YYYY-MM-DD HH:mm:ss',
                                        useCurrent: false
                                    })
                                </script>
                        @endpush

                        <!-- 'bootstrap / Toggle Switch Current Status Field' -->
                            <div class="col-md-4 col-sm-4 col-12">
                                <div class="form-group">
                                    {!! Form::label('current_status', 'Current Status:') !!}
                                    <label class="checkbox-inline">
                                        {!! Form::hidden('current_status', 0) !!}
                                        {!! Form::checkbox('current_status', 1, null,  ['data-toggle' => 'toggle']) !!}
                                    </label>
                                </div>
                            </div>
                        </div>


                        <fieldset class="fields-fieldset applicant">
                            <legend>1. Applicant Information</legend>

                            <div class="row">
                                <!-- Applicant Address Field -->
                                <div class="col-12">
                                    <div class="form-group">
                                        {!! Form::label('applicant_address', 'Full Address of Registered Head Oﬃce of Applicant:') !!}
                                        {!! Form::textarea('applicant_address', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <!-- Applicant Country Field -->
                                <div class="col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        {!! Form::label('applicant_country', 'Country:') !!}
                                        {!! Form::text('applicant_country', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <!-- Applicant Division Field -->
                                <div class="col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        {!! Form::label('applicant_division', 'Division:') !!}
                                        {!! Form::text('applicant_division', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <!-- Applicant District Field -->
                                <div class="col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        {!! Form::label('applicant_district', 'District:') !!}
                                        {!! Form::text('applicant_district', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <!-- Applicant Address Line 1 Field -->
                                <div class="col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        {!! Form::label('applicant_address_line_1', 'Address Line 1:') !!}
                                        {!! Form::text('applicant_address_line_1', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <!-- Applicant Address Line 2 Field -->
                                <div class="col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        {!! Form::label('applicant_address_line_2', 'Address Line 2:') !!}
                                        {!! Form::text('applicant_address_line_2', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <!-- Applicant Post Code Field -->
                                <div class="col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        {!! Form::label('applicant_post_code', 'Post Code:') !!}
                                        {!! Form::text('applicant_post_code', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <!-- Applicant Phone Field -->
                                <div class="col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        {!! Form::label('applicant_phone', 'Phone No:') !!}
                                        {!! Form::text('applicant_phone', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <!-- Applicant Fax Field -->
                                <div class="col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        {!! Form::label('applicant_fax', 'Fax no:') !!}
                                        {!! Form::text('applicant_fax', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <!-- Applicant Email Field -->
                                <div class="col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        {!! Form::label('applicant_email', 'Email:') !!}
                                        {!! Form::email('applicant_email', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <!-- Applicant Website Field -->
                                <div class="col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        {!! Form::label('applicant_website', 'Website:') !!}
                                        {!! Form::text('applicant_website', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>

                        </fieldset>
                        <fieldset class="fields-fieldset applicant">
                            <legend>2. Authorized Information</legend>
                            <div class="row">
                                <!-- Authorized Name Field -->
                                <div class="col-12">
                                    <div class="form-group">
                                        {!! Form::label('authorized_name', 'Name of the Correspondent Applicant:') !!}
                                        {!! Form::text('authorized_name', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <!-- Authorized Nationality Field -->
                                <div class="col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        {!! Form::label('authorized_nationality', 'Nationality:') !!}
                                        {!! Form::text('authorized_nationality', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <!-- Authorized Passport Field -->
                                <div class="col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        {!! Form::label('authorized_passport', 'Passport:') !!}
                                        {!! Form::text('authorized_passport', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <!-- Authorized Address Contact Field -->
                                <div class="col-12">
                                    <div class="form-group">
                                        {!! Form::label('authorized_address_contact', 'Correspondent Address & Contact Details:') !!}
                                        {!! Form::textarea('authorized_address_contact', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <!-- Authorized Country Field -->
                                <div class="col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        {!! Form::label('authorized_country', 'Country:') !!}
                                        {!! Form::text('authorized_country', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <!-- Authorized State Field -->
                                <div class="col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        {!! Form::label('authorized_state', 'State:') !!}
                                        {!! Form::text('authorized_state', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <!-- Authorized Post Code Field -->
                                <div class="col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        {!! Form::label('authorized_post_code', 'Post Code:') !!}
                                        {!! Form::text('authorized_post_code', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <!-- Authorized Province Field -->
                                <div class="col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        {!! Form::label('authorized_province', 'Province:') !!}
                                        {!! Form::text('authorized_province', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <!-- Authorized Address Line 1 Field -->
                                <div class="col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        {!! Form::label('authorized_address_line_1', 'Address Line 1:') !!}
                                        {!! Form::text('authorized_address_line_1', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <!-- Authorized Address Line 2 Field -->
                                <div class="col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        {!! Form::label('authorized_address_line_2', 'Address Line 2:') !!}
                                        {!! Form::text('authorized_address_line_2', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <!-- Authorized Phone Field -->
                                <div class="col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        {!! Form::label('authorized_phone', 'Phone No:') !!}
                                        {!! Form::text('authorized_phone', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <!-- Authorized Fax Field -->
                                <div class="col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        {!! Form::label('authorized_fax', 'Fax No:') !!}
                                        {!! Form::text('authorized_fax', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <!-- Authorized Email Field -->
                                <div class="col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        {!! Form::label('authorized_email', 'Email:') !!}
                                        {!! Form::email('authorized_email', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="fields-fieldset applicant">
                            <legend>3. Proposed Project:</legend>
                            <div class="row">
                                <!-- Proposed Project Name Field -->
                                <div class="col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        {!! Form::label('proposed_project_name', 'Project Name which will carry out the Business:') !!}
                                        {!! Form::text('proposed_project_name', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <!-- Proposed Project Company Logo Field -->
                                <div class="col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        {!! Form::label('proposed_project_company_logo', 'Proposed Project Company Logo:') !!}
                                        {!! Form::file('proposed_project_company_logo', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <!-- Proposed Project Type Of Business Field -->
                                <div class="col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        {!! Form::label('proposed_project_type_of_business', 'Type of Business / Industry or Services:') !!}
                                        {!! Form::text('proposed_project_type_of_business', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <!-- Proposed Project Industry Category Field -->
                                <div class="col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        {!! Form::label('proposed_project_industry_category', 'Industry Category:') !!}
                                        {!! Form::text('proposed_project_industry_category', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="fields-fieldset applicant">
                            <legend>4. Construction Schedule:</legend>
                            <div class="row">
                                <!-- Schedule Start Time Field -->
                                <div class="col-md-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        {!! Form::label('schedule_start_time', 'Start Time:') !!}
                                        {!! Form::date('schedule_start_time', null, ['class' => 'form-control','id'=>'schedule_start_time']) !!}
                                    </div>

                                    @push('scripts')
                                        <script type="text/javascript">
                                            $('#schedule_start_time').datetimepicker({
                                                format: 'YYYY-MM-DD HH:mm:ss',
                                                useCurrent: false
                                            })
                                        </script>
                                    @endpush
                                </div>

                                <!-- Schedule End Time Field -->
                                <div class="col-md-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        {!! Form::label('schedule_end_time', 'End Time:') !!}
                                        {!! Form::time('schedule_end_time', null, ['class' => 'form-control','id'=>'schedule_end_time']) !!}
                                    </div>

                                    @push('scripts')
                                        <script type="text/javascript">
                                            $('#schedule_end_time').datetimepicker({
                                                format: 'YYYY-MM-DD HH:mm:ss',
                                                useCurrent: false
                                            })
                                        </script>
                                    @endpush
                                </div>

                                <!-- Schedule Duration Field -->
                                <div class="col-md-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        {!! Form::label('schedule_duration', 'Duration (in days):') !!}
                                        {!! Form::text('schedule_duration', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <!-- Schedule Cod Field -->
                                <div class="col-md-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        {!! Form::label('schedule_cod', 'Schedule (COD):') !!}
                                        {!! Form::date('schedule_cod', null, ['class' => 'form-control','id'=>'schedule_cod']) !!}
                                    </div>

                                    @push('scripts')
                                        <script type="text/javascript">
                                            $('#schedule_cod').datetimepicker({
                                                format: 'YYYY-MM-DD HH:mm:ss',
                                                useCurrent: false
                                            })
                                        </script>
                                    @endpush
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="fields-fieldset applicant">
                            <legend>5. Carry of the Business (BDT)</legend>
                            <div class="row">
                                <!-- Schedule Start Time Field -->
                                <!-- Carry Capital Structure Field -->
                                <div class="col-md-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        {!! Form::label('carry_capital_structure', 'Capital Structure:') !!}
                                        {!! Form::text('carry_capital_structure', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <!-- Carry Authorized Catpital Field -->
                                <div class="col-md-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        {!! Form::label('carry_authorized_catpital', 'Authorized Capital:') !!}
                                        {!! Form::text('carry_authorized_catpital', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <!-- Carry Paid Up Catpital Field -->
                                <div class="col-md-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        {!! Form::label('carry_paid_up_catpital', 'Paid-Up Capital:') !!}
                                        {!! Form::text('carry_paid_up_catpital', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <!-- Carry Borrowing Loan Field -->
                                <div class="col-md-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        {!! Form::label('carry_borrowing_loan', 'Borrowing/Loan:') !!}
                                        {!! Form::text('carry_borrowing_loan', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <!-- Carry Total Field -->
                                <div class="col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        {!! Form::label('carry_total', 'Total:') !!}
                                        {!! Form::text('carry_total', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="fields-fieldset applicant">
                            <legend>6. Contribution in Paid-up Capital Among Shareholders</legend>

                            <ul>
                                <li>
                                    <div class="row">
                                        <!-- Paid Shareholder Name Field -->
                                        <div class="col-md-3 col-sm-6 col-12">
                                            <div class="form-group">
                                                {!! Form::label('paid_shareholder_name', 'Name of Shareholder::') !!}
                                                {!! Form::text('share_paid[0][paid_shareholder_name]', null, ['class' => 'form-control']) !!}
                                            </div>
                                        </div>

                                        <!-- Paid Shareholder Local Share Field -->
                                        <div class="col-md-3 col-sm-6 col-12">
                                            <div class="form-group">
                                                {!! Form::label('paid_shareholder_local_share', 'Local Share:') !!}
                                                {!! Form::text('share_paid[0][paid_shareholder_local_share]', null, ['class' => 'form-control']) !!}
                                            </div>
                                        </div>

                                        <!-- Paid Shareholder Foreign Share Field -->
                                        <div class="col-md-3 col-sm-6 col-12">
                                            <div class="form-group">
                                                {!! Form::label('paid_shareholder_foreign_share', 'Foreign Share:') !!}
                                                {!! Form::text('paid_shareholder_foreign_share', null, ['class' => 'form-control']) !!}
                                            </div>
                                        </div>

                                        <!-- Paid Shareholder Total Share Field -->
                                        <div class="col-md-3 col-sm-6 col-12">
                                            <div class="form-group">
                                                {!! Form::label('paid_shareholder_total_share', 'Total Share:') !!}
                                                {!! Form::text('paid_shareholder_total_share', null, ['class' => 'form-control']) !!}
                                            </div>
                                        </div>


                                        <!-- Paid Shareholder Total Share Field -->
                                        <div class="col-md-3 col-sm-6 col-12">
                                            <button class="plus-section">Plus</button>
                                        </div>

                                    </div>
                                </li>
                            </ul>

                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        {!! Form::label('paid_shareholder_capital_percent', 'Paid-up Capital Percent(%):') !!}
                                        {!! Form::text('paid_shareholder_capital_percent', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="fields-fieldset applicant">
                            <legend>7. Sponsor of Shareholder:</legend>
                            <ul>
                                <li>
                                    <div class="row">
                                        <!-- Sponsor Shareholder Name Field -->
                                        <div class="col-md-4 col-sm-6 col-12">
                                            <div class="form-group">
                                                {!! Form::label('sponsor_shareholder_name', 'Name:') !!}
                                                {!! Form::text('sponsor_shareholder_name', null, ['class' => 'form-control']) !!}
                                            </div>
                                        </div>

                                        <!-- Sponsor Shareholder Address Field -->
                                        <div class="col-md-4 col-sm-6 col-12">
                                            <div class="form-group">
                                                {!! Form::label('sponsor_shareholder_address', 'Address:') !!}
                                                {!! Form::text('sponsor_shareholder_address', null, ['class' => 'form-control']) !!}
                                            </div>
                                        </div>

                                        <!-- Sponsor Shareholder Nationality Field -->
                                        <div class="col-md-4 col-sm-6 col-12">
                                            <div class="form-group">
                                                {!! Form::label('sponsor_shareholder_nationality', 'Nationality:') !!}
                                                {!! Form::text('sponsor_shareholder_nationality', null, ['class' => 'form-control']) !!}
                                            </div>
                                        </div>

                                        <!-- Sponsor Shareholder Status In Company Field -->
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                {!! Form::label('sponsor_shareholder_status_in_company', 'Status in the proposed company:') !!}
                                                {!! Form::text('sponsor_shareholder_status_in_company', null, ['class' => 'form-control']) !!}
                                            </div>
                                        </div>

                                        <!-- Sponsor Shareholder Extend Share Percent Field -->
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                {!! Form::label('sponsor_shareholder_extend_share_percent', 'Extent of share Holding Percent(%):') !!}
                                                {!! Form::text('sponsor_shareholder_extend_share_percent', null, ['class' => 'form-control']) !!}
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </fieldset>
                        <fieldset class="fields-fieldset applicant">
                            <legend>8. Area of Land / SFB to be allotted</legend>
                            <!-- Paid Shareholder Capital Percent Field -->
                            <!-- Area Land Agreed Land Field -->
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        {!! Form::label('area_land_agreed_land', 'Agreed land by developers (square meter):') !!}
                                        {!! Form::text('area_land_agreed_land', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <!-- Area Land Plot No Field -->
                                <div class="col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        {!! Form::label('area_land_plot_no', 'Plot No:') !!}
                                        {!! Form::text('area_land_plot_no', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="fields-fieldset applicant">
                            <legend>9. Service/Products</legend>
                            <div class="row">
                                <!-- Service Products Name Description Field -->
                                <div class="col-12">
                                    <div class="form-group">
                                        {!! Form::label('service_products_name_description', 'Name / description of the Service/product(s):') !!}
                                        {!! Form::textarea('service_products_name_description', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <!-- Service Products Usage Of Products Field -->
                                <div class="col-12">
                                    <div class="form-group">
                                        {!! Form::label('service_products_usage_of_products', 'Usage of the Service/product(s):') !!}
                                        {!! Form::textarea('service_products_usage_of_products', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <!-- Service Products Manufacturing Process Field -->
                                <div class="col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        {!! Form::label('service_products_manufacturing_process', 'Service/Products Manufacturing Process:') !!}
                                        {!! Form::text('service_products_manufacturing_process', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <!-- Service Products Cost Of Project Field -->
                                <div class="col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        {!! Form::label('service_products_cost_of_project', 'Cost of the project (in local currency / in US$):') !!}
                                        {!! Form::text('service_products_cost_of_project', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="fields-fieldset applicant">
                            <legend>10. Production Programme:</legend>
                            <ul>
                                <li>
                                    <div class="row">
                                        <!-- Production Description Field -->
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                {!! Form::label('production_description', 'Production Description:') !!}
                                                {!! Form::text('production_description', null, ['class' => 'form-control']) !!}
                                            </div>
                                        </div>

                                        <!-- Production Unit Field -->
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                {!! Form::label('production_unit', 'Production Unit:') !!}
                                                {!! Form::text('production_unit', null, ['class' => 'form-control']) !!}
                                            </div>
                                        </div>

                                        <!-- Production 1 Year Qty Field -->
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                {!! Form::label('production_1_year_qty', 'Production 1st Year Qty:') !!}
                                                {!! Form::number('production_1_year_qty', null, ['class' => 'form-control']) !!}
                                            </div>
                                        </div>

                                        <!-- Production 2 Year Qty Field -->
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                {!! Form::label('production_2_year_qty', 'Production 2nd Year Qty:') !!}
                                                {!! Form::number('production_2_year_qty', null, ['class' => 'form-control']) !!}
                                            </div>
                                        </div>

                                        <!-- Production 3 Year Qty Field -->
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                {!! Form::label('production_3_year_qty', 'Production 3th Year Qty:') !!}
                                                {!! Form::number('production_3_year_qty', null, ['class' => 'form-control']) !!}
                                            </div>
                                        </div>

                                        <!-- Production 4 Year Qty Field -->
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                {!! Form::label('production_4_year_qty', 'Production 4th Year Qty:') !!}
                                                {!! Form::number('production_4_year_qty', null, ['class' => 'form-control']) !!}
                                            </div>
                                        </div>

                                        <!-- Production 5 Year Qty Field -->
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                {!! Form::label('production_5_year_qty', 'Production 5th Year Qty:') !!}
                                                {!! Form::number('production_5_year_qty', null, ['class' => 'form-control']) !!}
                                            </div>
                                        </div>

                                        <!-- Production Total Field -->
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                {!! Form::label('production_total', 'Production Total:') !!}
                                                {!! Form::number('production_total', null, ['class' => 'form-control']) !!}
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </fieldset>
                        <fieldset class="fields-fieldset applicant">
                            <legend>11. Projection of Domestic:</legend>
                            <ul>
                                <li>
                                    <div class="row">
                                        <!-- Projection Description Field -->
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                {!! Form::label('projection_description', 'Projection Description:') !!}
                                                {!! Form::text('projection_description', null, ['class' => 'form-control']) !!}
                                            </div>
                                        </div>

                                        <!-- Projection Unit Field -->
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                {!! Form::label('projection_unit', 'Projection Unit:') !!}
                                                {!! Form::text('projection_unit', null, ['class' => 'form-control']) !!}
                                            </div>
                                        </div>

                                        <!-- Projection 1 Year Qty Field -->
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                {!! Form::label('projection_1_year_qty', 'Projection 1st Year Qty:') !!}
                                                {!! Form::number('projection_1_year_qty', null, ['class' => 'form-control']) !!}
                                            </div>
                                        </div>

                                        <!-- Projection 2 Year Qty Field -->
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                {!! Form::label('projection_2_year_qty', 'Projection 2nd Year Qty:') !!}
                                                {!! Form::number('projection_2_year_qty', null, ['class' => 'form-control']) !!}
                                            </div>
                                        </div>

                                        <!-- Projection 3 Year Qty Field -->
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                {!! Form::label('projection_3_year_qty', 'Projection 3th Year Qty:') !!}
                                                {!! Form::number('projection_3_year_qty', null, ['class' => 'form-control']) !!}
                                            </div>
                                        </div>

                                        <!-- Projection 4 Year Qty Field -->
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                {!! Form::label('projection_4_year_qty', 'Projection 4th Year Qty:') !!}
                                                {!! Form::number('projection_4_year_qty', null, ['class' => 'form-control']) !!}
                                            </div>
                                        </div>

                                        <!-- Projection 5 Year Qty Field -->
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                {!! Form::label('projection_5_year_qty', 'Projection 5th Year Qty:') !!}
                                                {!! Form::number('projection_5_year_qty', null, ['class' => 'form-control']) !!}
                                            </div>
                                        </div>

                                        <!-- Projection Total Field -->
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                {!! Form::label('projection_total', 'Projection Total:') !!}
                                                {!! Form::number('projection_total', null, ['class' => 'form-control']) !!}
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </fieldset>
                        <fieldset class="fields-fieldset applicant">
                            <legend>12. Addition of Machinery:</legend>
                            <ul>
                                <li>
                                    <div class="row">
                                        <!-- Machine Details Field -->
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                {!! Form::label('machine_details', 'Machine Details:') !!}
                                                {!! Form::text('machine_details', null, ['class' => 'form-control']) !!}
                                            </div>
                                        </div>

                                        <!-- Machine Country Origin Field -->
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                {!! Form::label('machine_country_origin', 'Machine Country Origin:') !!}
                                                {!! Form::text('machine_country_origin', null, ['class' => 'form-control']) !!}
                                            </div>
                                        </div>

                                        <!-- Machine Name Of Vendor Field -->
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                {!! Form::label('machine_name_of_vendor', 'Machine Name Of Vendor:') !!}
                                                {!! Form::text('machine_name_of_vendor', null, ['class' => 'form-control']) !!}
                                            </div>
                                        </div>

                                        <!-- Machine Value Field -->
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                {!! Form::label('machine_value', 'Machine Value:') !!}
                                                {!! Form::text('machine_value', null, ['class' => 'form-control']) !!}
                                            </div>
                                        </div>

                                        <!-- Machine State Field -->
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                {!! Form::label('machine_state', 'Machine State:') !!}
                                                {!! Form::text('machine_state', null, ['class' => 'form-control']) !!}
                                            </div>
                                        </div>

                                        <!-- Machine How Old Field -->
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                {!! Form::label('machine_how_old', 'If Machine old, How Old? (year):') !!}
                                                {!! Form::text('machine_how_old', null, ['class' => 'form-control']) !!}
                                            </div>
                                        </div>
                                    </div>

                                </li>
                            </ul>
                        </fieldset>
                        <fieldset class="fields-fieldset applicant">
                            <legend>13. Manpower requirements:</legend>
                            <ul>
                                <li>
                                    <div class="row">
                                        <!-- Manpower Year Field -->
                                        <div class="col-md-3 col-sm-6 col-12">
                                            <div class="form-group">
                                                {!! Form::label('manpower_year', 'Manpower Year:') !!}
                                                {!! Form::text('manpower_year', null, ['class' => 'form-control']) !!}
                                            </div>
                                        </div>

                                        <!-- Manpower Foreign Managerial Field -->
                                        <div class="col-md-3 col-sm-6 col-12">
                                            <div class="form-group">
                                                {!! Form::label('manpower_foreign_managerial', 'Foreign Managerial:') !!}
                                                {!! Form::text('manpower_foreign_managerial', null, ['class' => 'form-control']) !!}
                                            </div>
                                        </div>

                                        <!-- Manpower Foreign Worker Field -->
                                        <div class="col-md-3 col-sm-6 col-12">
                                            <div class="form-group">
                                                {!! Form::label('manpower_foreign_worker', 'Foreign Worker:') !!}
                                                {!! Form::text('manpower_foreign_worker', null, ['class' => 'form-control']) !!}
                                            </div>
                                        </div>

                                        <!-- Manpower Foreign Total Field -->
                                        <div class="col-md-3 col-sm-6 col-12">
                                            <div class="form-group">
                                                {!! Form::label('manpower_foreign_total', 'Foreign Total:') !!}
                                                {!! Form::text('manpower_foreign_total', null, ['class' => 'form-control']) !!}
                                            </div>
                                        </div>

                                        <!-- Manpower Local Managerial Field -->
                                        <div class="col-md-3 col-sm-6 col-12">
                                            <div class="form-group">
                                                {!! Form::label('manpower_local_managerial', 'Local Managerial:') !!}
                                                {!! Form::text('manpower_local_managerial', null, ['class' => 'form-control']) !!}
                                            </div>
                                        </div>

                                        <!-- Manpower Local Worker Field -->
                                        <div class="col-md-3 col-sm-6 col-12">
                                            <div class="form-group">
                                                {!! Form::label('manpower_local_worker', 'Local Worker:') !!}
                                                {!! Form::text('manpower_local_worker', null, ['class' => 'form-control']) !!}
                                            </div>
                                        </div>

                                        <!-- Manpower Local Total Field -->
                                        <div class="col-md-3 col-sm-6 col-12">
                                            <div class="form-group">
                                                {!! Form::label('manpower_local_total', 'Local Total:') !!}
                                                {!! Form::text('manpower_local_total', null, ['class' => 'form-control']) !!}
                                            </div>
                                        </div>

                                        <!-- Manpower Grand Total Field -->
                                        <div class="col-md-3 col-sm-6 col-12">
                                            <div class="form-group">
                                                {!! Form::label('manpower_grand_total', 'Grand Total:') !!}
                                                {!! Form::text('manpower_grand_total', null, ['class' => 'form-control']) !!}
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </fieldset>
                        <fieldset class="fields-fieldset applicant">
                            <legend>14. Sales Revenue (at maximum capacity):</legend>
                            <div class="row">
                                <!-- Revenue Domestic Field -->
                                <div class="col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        {!! Form::label('revenue_domestic', ' Domestic Revenue ($USD):') !!}
                                        {!! Form::number('revenue_domestic', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <!-- Revenue Export Field -->
                                <div class="col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        {!! Form::label('revenue_export', ' Export Revenue ($USD):') !!}
                                        {!! Form::number('revenue_export', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <!-- Revenue Sale Export Oriented Field -->
                                <div class="col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        {!! Form::label('revenue_sale_export_oriented', 'Revenue in Sale to Export Oriented ($USD):') !!}
                                        {!! Form::number('revenue_sale_export_oriented', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <!-- Revenue Total Field -->
                                <div class="col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        {!! Form::label('revenue_total', ' Total Revenue ($USD):') !!}
                                        {!! Form::number('revenue_total', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="fields-fieldset applicant">
                            <legend>15. Required Infrastructure:</legend>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        {!! Form::label('req_infrastructure_land_at_initial', 'Land (in square-meter) Initial Period:') !!}
                                        {!! Form::text('req_infrastructure_land_at_initial', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        {!! Form::label('req_infrastructure_land_at_maximum', 'Land (in square-meter) Regular Operation Period:') !!}
                                        {!! Form::text('req_infrastructure_land_at_maximum', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        {!! Form::label('req_infrastructure_power_at_initial', 'Power (in KW/H) Initial Period:') !!}
                                        {!! Form::text('req_infrastructure_power_at_initial', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        {!! Form::label('req_infrastructure_power_at_maximum', 'Power (in KW/H) Regular Operation Period:') !!}
                                        {!! Form::text('req_infrastructure_power_at_maximum', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        {!! Form::label('req_infrastructure_gas_at_initial', 'GAS (in CM) Initial Period:') !!}
                                        {!! Form::text('req_infrastructure_gas_at_initial', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        {!! Form::label('req_infrastructure_gas_at_maximum', 'GAS (in CM) Regular Operation Period:') !!}
                                        {!! Form::text('req_infrastructure_gas_at_maximum', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        {!! Form::label('req_infrastructure_water_at_initial', 'Water (in CM) Initial Period:') !!}
                                        {!! Form::text('req_infrastructure_water_at_initial', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        {!! Form::label('req_infrastructure_water_at_maximum', 'Water (in CM) Regular Operation Period:') !!}
                                        {!! Form::text('req_infrastructure_water_at_maximum', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        {!! Form::label('req_infrastructure_central_etp_at_initial', 'Central ETP (in CM) Initial Period:') !!}
                                        {!! Form::text('req_infrastructure_central_etp_at_initial', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        {!! Form::label('req_infrastructure_central_etp_at_maximum', 'Central ETP (in CM) Regular Operation Period:') !!}
                                        {!! Form::text('req_infrastructure_central_etp_at_maximum', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="fields-fieldset applicant">
                            <legend>16. Required Documents for attachment:</legend>
                            <ul>
                                <li>
                                    <div class="row">
                                        <!-- Attachment Name Field -->
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                {!! Form::label('attachment_name', 'Business Profile:') !!}
                                                {!! Form::text('attachment_name', null, ['class' => 'form-control']) !!}
                                            </div>
                                        </div>

                                        <!-- Attachment Field -->
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                {!! Form::label('attachment', 'Attached PDF ﬁle:') !!}
                                                {!! Form::file('attachment') !!}
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </fieldset>
                        <div class="row">
                            <!-- 'bootstrap / Toggle Switch Status Field' -->
                            <div class="col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    {!! Form::label('status', 'Status:') !!}
                                    <label class="checkbox-inline">
                                        {!! Form::hidden('status', 0) !!}
                                        {!! Form::checkbox('main_status', 1, null,  ['data-toggle' => 'toggle']) !!}
                                    </label>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <!-- Submit Field -->
                            <div class="col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                                    <a href="{{ route('admin.investors.index') }}" class="btn btn-default">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION CONTACT US -->
@endsection
