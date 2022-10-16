@section('title') Facilities & Incentives @stop
@extends('front.layout.master')
@section('content')

    <section class="headings">
        <div class="text-heading text-center">
            <div class="container">
                <h1>Facilities & Incentives</h1>
                <h2><a href="index.html">Home </a> &nbsp;/&nbsp; Facilities & Incentives</h2>
            </div>
        </div>
    </section>

    <!-- START SECTION UI ELEMENT -->
    <section class="about-us bg-white-1">
        <div class="container">
            <div class="row">
                {{-- <div>
                    <h2 class="text-left mb-4">Coming Soon</span></h2>
                </div> --}}
                <div class="sec-title">
                    <h2>FACILITIES <span>AT BEZ </span></h2>
                    <p>We provide full service at every step.</p>
                </div>
                <div class="col-lg-12 col-md-12 mb70 bg-shb p-3  who-1">
                    {!! setting('facilities_body')!!}
                    {{-- <div class="pftext">
                        <p><strong>Site grading:</strong> Project land has already been segregated in different grade
                            i.e. industrial plot, residential plot, utilities, administrative buildings, amenities and
                            others</p>
                        <p><strong>Boundary Wall:</strong> Entire project would be surrounded by 7,267 running feet of
                            12-feet high wall.</p>
                        <p><strong>Connectivity:</strong> BEZ is located at industrial zone. It’s adjacent to
                            Dhaka-Tangail Highway (construction of 04 Lane is underway). The project is 1.5 km away from
                            Turag river.</p>
                        <p><strong>Entrance:</strong> The project can easily be accessible through 20 feet wide
                            bituminous road from Dhaka-Tangail highway.</p>
                        <p><strong>Surface drainage:</strong>The drainage network and structure has been designed to
                            discharge the heavy rain during the rainy season so that the project can be free from
                            flooding. </p>
                        <p><strong>Water demand:</strong> Water demand has been forecasted as 35,000 m3 / day by using
                            ground water only. </p>
                        <p><strong>Fire Fighting:</strong> Water demand for firefighting has been calculated based on
                            population and land area. Fire service office (18 persons) with two fire fighting vehicles
                            and equipment.</p>
                        <p><strong>Sewage System:</strong>The sewerage system is planned to cater for the anticipated
                            peak discharge requirements and to treat the waste to the required discharge standards. The
                            estimation of the sewage shall vary depending upon the land use distribution.</p>
                        <p><strong>Central Effluent Treatment Plant (CETP):</strong> Around 200 m3 / hour capacity CETP
                            would be installed with configuration of the genuine treatment framework for a CETP. It
                            includes determination of option procedures in light of the prerequisite/capacity of
                            individual treatment procedures to expel particular waste constituents. </p>
                        <p><strong>Sewage Treatment plant (STP):</strong> Sewage treatment is the process of removing
                            contaminants from wastewater, comprising of storm run-off, domestic sewage and primary
                            treated effluent. It includes physical, chemical and biological processes to remove various
                            contaminants. In this stage industries manage sewerage through soak well; STP will be
                            prepared for extension portion in the near future. </p>
                        <p><strong>Solid Waste Management (SWM):</strong> SWM is one of the most essential services for
                            maintaining the quality of life in economic zone and for ensuring better standards of health
                            and sanitation. Source segregation should be made mandatory and due care has to be taken
                            while planning the collection, transportation of waste within the site area. Users will be
                            required to segregate their waste as per described categories and put in different size
                            bins.</p>
                        <p><strong>Power Supply System:</strong> <br><strong>Step 1:</strong> Initially 5 MVA will be
                            taken from the nearby REB 33 KV line for Infrastructure development purposes which may be
                            upgraded to 10 MVA if REB power is available.
                            Considering inconsistent and unreliable source due to frequent problems in the network, a
                            400 KVA diesel generator set will be installed in addition to the existing 400 KVA diesel
                            generator.
                            <br><strong>Step 2:</strong> In operational stage, to ensure adequate reliable power, a 230/132/11 kV grid Substation within BEZ would be constructed.</p>
                        <p><strong>Gas demand:</strong> A 15 MW gas based power plant would be constructed for sourcing the required power to entire economic zone. Around 3 MMCFD of gas is required to run the power plant.A tripartite agreement, in this regard, among BEZA, BEZ and TGTDCL has been signed for construction of required infrastructure facility to supply gas in the project.</p>
                        <p><strong>Landscaping:</strong> Includes works associated with the landscaping within the EZ covering tree strips along the boundary, roads, public greenery etc. Sufficient land Area will be used for landscaping and Aesthetic beautification of the project area.</p>
                        <p><strong>Amenities:</strong> Specialized infrastructure would be constructed within EZ catering to the specific requirements of the occupant units, including:</p>
                        <ul style="list-style-type: disc; padding-left: 30px;">
                            <li>Working Shed, Business Club, Convention center </li>
                            <li>Training center& Administrative building etc.</li>
                        </ul>
                        <p><strong> Incentives at BEZ:</strong></p>

                        <table>
                            <tbody>
                            <tr>
                                <th>
                                    <p><strong>SL</strong></p>
                                </th>
                                <th>
                                    <p><strong>Incentives</strong></p>
                                </th>
                                <th>
                                    <p><strong>Explanation</strong></p>
                                </th>
                            </tr>
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
                                    <p>12th&nbsp;&nbsp; year &ndash; 30%</p>
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
                                    <p>Exemption from tax on transferring immovable property imposed under section 44 of Upazilla Parishad Act, 1998</p>
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
                        </table>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION UI ELEMENT -->

@endsection
