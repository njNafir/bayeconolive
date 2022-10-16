@section('title') About Us @stop
@extends('front.layout.master-inner')
@section('content-inner')
    <!-- START SECTION ABOUT -->
    <section class="about-us fh">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 who-1">
                    {{-- <div>
                        <h2 class="text-left mb-4">Coming Soon</span></h2>
                    </div> --}}
                    <div>
                        <h2 class="text-left mb-4">About <span>Us</span></h2>
                    </div>
                    {!! setting('about_us_body') !!}
                    {{-- <div class="pftext">
                        <strong>Background of the Project:</strong>
                        <p>With an ambit of upgrade of financial improvement in the nation, Government of Bangladesh
                            with backing from World Bank and the Department for Universal Development, United Kingdom
                            (UK-DFID) has proposed to create EZs at different potential areas in Bangladesh as Private
                            Sector Development Support Project (PSDSP).</p>
                        <p>Bangladesh Economic Zone Authority (BEZA) is the Appex Body in charge of foundations of EZs
                            in all the potential regions including the regressive and undeveloped areas. BEZA has been
                            shaped under the Bangladesh Economic Zone Act, 2010.</p>
                        <p>Bay Group, one of the country’s export oriented business conglomerate, come forward to
                            establish an Economic Zone (EZ) in Gazipur named “Bay Economic Zone (BEZ)” and has obtained
                            the final approval / license from Bangladesh Economic Zones Authority (BEZA) on April 24,
                            2017. The proposed Economic Zone would be established in an area of approximately 37.59
                            acres of land (±5) located in Gazipur.</p>
                        <br>
                        <strong>Location of the Project:</strong>
                        <p>A major portion of project site is located at Kochakuri Mouza, Mouchak, Kaliakoir, Gazipur.
                            The surrounding area of proposed EZ is in an industrial zone. From the economic point of
                            view, this site has a significant contribution in national economy. </p>
                        <br>
                        <strong>Connectivity:</strong>
                        <p>Bay Economic Zone is situated in a area which is well connected with the country as well as
                            overseas among the all economic zones. The connectivity includes: </p>

                        <ul style="list-style-type: disc; padding-left: 30px;">
                            <li>Bay Economic Zone is well connected to Dhaka as well as Chittagong</li>
                            <li>Road Connectivity: Only 34 Km from Dhaka City</li>
                            <li>Air Port Connectivity: Only 22.67 km Hazrat Shahjalal Airport</li>
                            <li>Sea Port Connectivity: Only 292.22 km from CTG sea port</li>
                            <li>River Connectivity: Only 63.89 km from Meghna River Ghat Port</li>
                        </ul>

                        <strong>Project Activities:</strong>
                        <p>The Bay EZ has primarily planned to establish following industries with the expectation of
                            fulfillment of not only domestic demand but also foreign & export investors:</p>

                        <ul style="list-style-type: disc; padding-left: 30px;">
                            <li>Leather Goods</li>
                            <li>Printing and Packaging</li>
                            <li>IT and other</li>
                            <li>Light Mechanical Equipment</li>
                        </ul>

                        <strong>Employment Projection:</strong>
                        <p>Approximately 10,000 new employments, directly, would be created in economic zone. Another
                            50% employment would be created indirectly based on the business in the economic zone.</p>


                        <strong>Existing Status of Development:</strong>
                        <table>
                            <tbody>
                            <tr>
                                <th>
                                    <strong>Sl No.</strong>
                                </th>
                                <th>
                                    <strong>Investors &amp; users</strong>
                                </th>
                                <th>
                                    <strong>Nature of the Business</strong>
                                </th>
                                <th>
                                    <strong>Status</strong>
                                </th>
                            </tr>
                            <tr>
                                <td rowspan="7">
                                    <p><strong>Revenue Generating Unit</strong></p>
                                </td>
                                <td>
                                    <p>Bay Sports Wear Ltd.</p>
                                </td>
                                <td>
                                    <p>Export oriented footwear manufacturing industry</p>
                                </td>
                                <td>
                                    <p>In Operation</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Joint Venture of Bay Sports Wear Ltd. and Stella International Holding Ltd.</p>
                                </td>
                                <td>
                                    <p>Footwear Manufacturing</p>
                                </td>
                                <td>
                                    <p>Project under implementation</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Formoza Mold &amp; Lasting Ltd.</p>
                                </td>
                                <td>
                                    <p>Manufacturing of Plastic items</p>
                                </td>
                                <td>
                                    <p>Project Under implementation</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Bay Box Limited</p>
                                </td>
                                <td>
                                    <p>Manufacturing of Packaging &amp; Accessories</p>
                                </td>
                                <td>
                                    <p>Project Under implementation</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Essential Dyeing Ltd.</p>
                                </td>
                                <td>
                                    <p>Composite Knit Garments</p>
                                </td>
                                <td>
                                    <p>Project under implementation</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Meigo BD (Production floor)</p>
                                </td>
                                <td>
                                    <p>Toy manufacturing</p>
                                </td>
                                <td>
                                    <p>In Operation</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Bay Cargo Centre Ltd.</p>
                                </td>
                                <td>
                                    <p>Logistics</p>
                                </td>
                                <td>
                                    <p>Project under implementation</p>
                                </td>
                            </tr>
                            <tr>
                                <td rowspan="11">
                                    <p><strong>Non-Revenue Generating Unit</strong></p>
                                </td>
                                <td>
                                    <p>Bay Economic Zone Office</p>
                                </td>
                                <td>
                                    <p>Office</p>
                                </td>
                                <td>
                                    <p>In Operation</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>BD Customs, Bank</p>
                                </td>
                                <td>
                                    <p>Custom House + Financial Institution</p>
                                </td>
                                <td>
                                    <p>Under Implementation</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>BEZ Office, Club House</p>
                                </td>
                                <td>
                                    <p>Utility &amp; Others</p>
                                </td>
                                <td>
                                    <p>Under Implementation</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <p>Generation of Electricity</p>
                                </td>
                                <td>
                                    <p>Utility &amp; Others</p>
                                </td>
                                <td>
                                    <p>Under Implementation</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Effluent Treatment Plant</p>
                                </td>
                                <td>
                                    <p>Utility &amp; Others</p>
                                </td>
                                <td>
                                    <p>Under Implementation</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Water Treatment Plant</p>
                                </td>
                                <td>
                                    <p>Utility &amp; Others</p>
                                </td>
                                <td>
                                    <p>Under Implementation</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Sewerage Treatment Plant</p>
                                </td>
                                <td>
                                    <p>Utility &amp; Others</p>
                                </td>
                                <td>
                                    <p>Under Implementation</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Deep Tube-well</p>
                                </td>
                                <td>
                                    <p>Utility &amp; Others</p>
                                </td>
                                <td>
                                    <p>Under Implementation</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Healthcare, Daycare</p>
                                </td>
                                <td>
                                    <p>Utility &amp; Others</p>
                                </td>
                                <td>
                                    <p>Under Implementation</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Mosque</p>
                                </td>
                                <td>
                                    <p>Utility &amp; Others</p>
                                </td>
                                <td>
                                    <p>Under Implementation</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Garden + Park</p>
                                </td>
                                <td>
                                    <p>Utility &amp; Others</p>
                                </td>
                                <td>
                                    <p>Under Implementation</p>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <br>
                        <br>
                        <strong>Certification / Approvals & Permissions:</strong>
                        <table>
                            <tbody>
                            <tr>
                                <th>
                                    <strong><strong>Sl.</strong></strong>
                                </th>
                                <th>
                                    <strong><strong>Particulars</strong></strong>
                                </th>
                                <th>
                                    <strong><strong>Status</strong></strong>
                                </th>
                            </tr>
                            <tr>
                                <td>
                                    <p>1</p>
                                </td>
                                <td>
                                    <p>Company Formation</p>
                                </td>
                                <td>
                                    <p>Obtained</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>2</p>
                                </td>
                                <td>
                                    <p>Final License of BEZA</p>
                                </td>
                                <td>
                                    <p>Obtained</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>3</p>
                                </td>
                                <td>
                                    <p>Approval of Master Plan of BEZ</p>
                                </td>
                                <td>
                                    <p>Under Process</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>4</p>
                                </td>
                                <td>
                                    <p>Approval of Building Plan</p>
                                </td>
                                <td>
                                    <p>Under Process</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>5</p>
                                </td>
                                <td>
                                    <p>Consent / Approval for Construction Work from BEZ</p>
                                </td>
                                <td>
                                    <p>Under Process</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>6</p>
                                </td>
                                <td>
                                    <p>NOC from Local Authority</p>
                                </td>
                                <td>
                                    <p>Obtained</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>7</p>
                                </td>
                                <td>
                                    <p>TIN &amp; VAT Registration</p>
                                </td>
                                <td>
                                    <p>Obtained</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>8</p>
                                </td>
                                <td>
                                    <p>Trade License</p>
                                </td>
                                <td>
                                    <p>Obtained</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>9</p>
                                </td>
                                <td>
                                    <p>Approval of EIA Report from DoE</p>
                                </td>
                                <td>
                                    <p>Obtained</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>10</p>
                                </td>
                                <td>
                                    <p>Electricity Connection (REB)</p>
                                </td>
                                <td>
                                    <p>Under Process</p>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div> --}}
                    <div class="box bg-2">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION ABOUT -->
@endsection
