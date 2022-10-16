@section('title') Home @stop
@extends('front.layout.master')
@section('content')
    <section class="headings">
        <div class="text-heading text-center">
            <div class="container">
                <h1>Explore</h1>
                <h2><a href="index.html">Home</a> &nbsp;/&nbsp; Explore</h2>
            </div>
        </div>
    </section><!-- START SECTION UI ELEMENT -->
    <section class="ui-element bg-white-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 mb70">
                    {{-- <div>
                        <h2 class="text-left mb-4">Coming Soon</span></h2>
                    </div> --}}

                    <div class="sec-title">
                        <h2><span>Why</span> Invest in Bangladesh</h2>
                        <p>We provide full service at every step.</p>
                    </div>
                    <div class="tabbed-content button-tabs bg-shb p-3">
                        <ul class="tabs">
                            <li class="active">
                                <div class="tab-title">
                                    {{-- <span>Economic and Social Highlights</span> --}}
                                    <span>{!! setting('explore_tab_1_title') !!}</span>
                                </div>
                                <div class="tab-content">
                                    {!! setting('explore_tab_1_body') !!}
                                    {{-- <p><i class="fa fa-arrow-right"></i> Consistent GDP Growth Rate(last one decade)  more than 6.0%</p>
                                    <p><i class="fa fa-arrow-right"></i> Per Capita GNI $1,940</p>
                                    <p><i class="fa fa-arrow-right"></i> Annual FDI Inflows $ 1.7 Billion</p>
                                    <p><i class="fa fa-arrow-right"></i> Export Earnings of $33.6 Billion</p>
                                    <p><i class="fa fa-arrow-right"></i> Foreign Exchange Reserve (Feb 2021) $41.9 Billion</p>
                                    <p><i class="fa fa-arrow-right"></i> 127 million mobile subscribers (79% of total Population) and 48 million internet users (30% of Total Population)</p> --}}
                                </div>
                            </li>
                            <li>
                                <div class="tab-title">
                                    {{-- <span>Why Invest in Bangladesh</span> --}}
                                    <span>{!! setting('explore_tab_2_title') !!}</span>
                                </div>
                                <div class="tab-content">
                                    {!! setting('explore_tab_2_body') !!}
                                    {{-- <p><i class="fa fa-arrow-right"></i> <strong>Energy:</strong> The Government of Bangladesh guarantees uninterrupted quality power to EZ’s.</p>
                                    <p><i class="fa fa-arrow-right"></i> <strong>Manpower:.</strong> With the 8th largest population, 160 million Bangladesh blessed with “Demographic Dividend” from Day labor to senior management, are ready to work</p>
                                    <p><i class="fa fa-arrow-right"></i> <strong>Business Friendly:.</strong> The Government of Bangladesh fully supports the EZ movement and has taken the initiative to establish100 new economic zones throughout the country within 15 years.</p>
                                    <p><i class="fa fa-arrow-right"></i> <strong>High-Growth Rate :</strong> Building on a consistent growth rate of 6% on average since 1994, the Government of Bangladesh aims to transform the country into a middle income country by 2021.</p>
                                    <p><i class="fa fa-arrow-right"></i> <strong>Strategic location:</strong> Bangladesh being at the apex of the Bay of Bengal with India and other SAARC countries to the west, Japan, Korea, China and other ASEAN countries to the east, can emerge as a Mega Asian Growth Triangle for huge local and foreign markets.</p>
                                    <p><i class="fa fa-arrow-right"></i> <strong>Performances of Existing EPZs are encouraging:</strong> Current performance of existing export processing zones (18%+ of national exports & 0.4 million employments) is favorable and encouraging.</p> --}}
                                </div>
                            </li>
                            <li>
                                <div class="tab-title">
                                    {{-- <span>Why Economic Zone</span> --}}
                                    <span>{!! setting('explore_tab_3_title') !!}</span>
                                </div>
                                <div class="tab-content">
                                    {!! setting('explore_tab_3_body') !!}
                                    {{-- <p><i class="fa fa-arrow-right"></i> All existing 8 EPZs are almost fully occupied with tenants; but contributions of Industry and Service sectors to GDP are increasing.</p>
                                    <p><i class="fa fa-arrow-right"></i> Unsystematic industrialization in and around Dhaka city without special incentive package; excessive pressure of people on Dhaka with huge traffic jam and environmental degradation.</p>
                                    <p><i class="fa fa-arrow-right"></i> Country’s lion shares of FDI (More than 80%) comes from Telco and Gas & Petroleum; To attract FDI from different industries and diversify export, EZ is the best solution with comprehensive facilities & incentives.</p>
                                    <p><i class="fa fa-arrow-right"></i> India,Vietnam, China, Philippines are ideal example of successful decentralized industrialization in EZs/SEZs for more than three decades. So why not Bangladesh?</p> --}}
                                </div>
                            </li>

                            <li>
                                <div class="tab-title">
                                    {{-- <span>Competitive Incentives</span> --}}
                                    <span>{!! setting('explore_tab_4_title') !!}</span>
                                </div>
                                <div class="tab-content">
                                    {!! setting('explore_tab_4_body') !!}
                                    {{-- <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <td>
                                                <p><strong>SL</strong>
                                                </p>
                                            </td>
                                            <td width="800">
                                                <p><strong>Incentives</strong>
                                                </p>
                                            </td>
                                            <td>
                                                <p><strong>Explanation</strong>
                                                </p>
                                            </td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <p>1</p>
                                            </td>
                                            <td>
                                                <p>Income Tax exemption</p>
                                            </td>
                                            <td>
                                                <p>1st 10 years &ndash; 100%</p>
                                                <p>11th year &ndash; 70%</p>
                                                <p>12th year &ndash; 30%</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>2</p>
                                            </td>
                                            <td>
                                                <p>Income tax exemption on dividend for 10 years</p>
                                            </td>
                                            <td>
                                                <p>100% Exemption</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>3</p>
                                            </td>
                                            <td>
                                                <p>Income tax exemption on capital gains from transfer of shares for 10 years</p>
                                            </td>
                                            <td>
                                                <p>100% Exemption</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>4</p>
                                            </td>
                                            <td>
                                                <p>Income tax exemption on royalties, technical know-how and technical assistance fees etc for 10 years</p>
                                            </td>
                                            <td>
                                                <p>100% Exemption</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>5</p>
                                            </td>
                                            <td>
                                                <p>Duty free import of goods to be used for the development of Zones (except for MS Rod/Bar, Cement, Pre-fabricated Building, Iron/Steel Sheet)</p>
                                            </td>
                                            <td>
                                                <p>100% Exemption</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>6</p>
                                            </td>
                                            <td>
                                                <p>Land development tax exemption</p>
                                            </td>
                                            <td>
                                                <p>100% Exemption</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>7</p>
                                            </td>
                                            <td>
                                                <p>Exemption from tax sub tax, rate, toll, fees etc imposed under section 65 of Local Government (Union Parishad) Act, 2009</p>
                                            </td>
                                            <td>
                                                <p>100% Exemption</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>8</p>
                                            </td>
                                            <td>
                                                <p>Exemption from tax on transferring immovable property imposed under section 44 of UpazillaParishad Act, 1998</p>
                                            </td>
                                            <td>
                                                <p>100% Exemption</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>9</p>
                                            </td>
                                            <td>
                                                <p>Exemption of Stamp Duty on registration of loan document with Scheduled Bank</p>
                                            </td>
                                            <td>
                                                <p>100% Exemption</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>10</p>
                                            </td>
                                            <td>
                                                <p>Stamp duty is exempted at the time of transferring land in favor of the Consortium, Joint Venture (Private EZ developers) formed for the purpose of setting up the zone.</p>
                                            </td>
                                            <td>
                                                <p>100% Exemption</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>11</p>
                                            </td>
                                            <td>
                                                <p>Income Tax deducted at source ( under section 53H of the Income Tax Ordinance 1984) is exempted at the time of transferring land in favor of the Consortium, Joint Venture (Private EZ developers) formed for the purpose of setting up the zone.</p>
                                            </td>
                                            <td>
                                                <p>100% Exemption</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>12</p>
                                            </td>
                                            <td>
                                                <p>Registration fees (Registration Act 1908) is exempted at the time of transferring land in favor of the Consortium, Joint Venture (Private EZ developers) formed for the purpose of setting up the zone.</p>
                                            </td>
                                            <td>
                                                <p>100% Exemption</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>13</p>
                                            </td>
                                            <td>
                                                <p>Exemption of stamp duty on the land lease agreement between BEZA &amp; Developers</p>
                                            </td>
                                            <td>
                                                <p>100% Exemption</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>14</p>
                                            </td>
                                            <td>
                                                <p>Exemption of stamp duty on lease registration</p>
                                            </td>
                                            <td>
                                                <p>50% Exemption</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>15</p>
                                            </td>
                                            <td>
                                                <p>EZ investors are waived from Board of Investment Act, 1989</p>
                                            </td>
                                            <td>
                                                <p>Completely Exempted</p>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table> --}}

                                </div>
                            </li>
                        </ul>
                    </div><!--end of button tabs-->
                </div>
            </div>
        </div>
    </section><!-- END SECTION UI ELEMENT -->
@endsection
