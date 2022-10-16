<?php
// https://www.qcode.in/save-laravel-app-settings-in-database/
// setting($key)
return [
    // 'app_logos' => [
    //     'title' => 'Logo',
    //     'desc' => 'All the Logo settings',
    //     'icon' => 'glyphicon glyphicon-sunglasses',

    //     'elements' => [
    //         [
    //             'type' => 'file', // input fields type
    //             'data' => 'file', // data type, string, int, boolean
    //             'name' => 'app_header_logo', // unique name for field
    //             'label' => 'Main Logo', // you know what label it is
    //             'rules' => '', // validation rule of laravel
    //             'class' => '', // any class for input
    //             'value' => 'main_logo.png' // default value if you want
    //         ],
    //         [
    //             'type' => 'file', // input fields type
    //             'data' => 'file', // data type, string, int, boolean
    //             'name' => 'app_footer_logo', // unique name for field
    //             'label' => 'Footer Logo', // you know what label it is
    //             'rules' => '', // validation rule of laravel
    //             'class' => '', // any class for input
    //             'value' => 'footer_logo.png' // default value if you want
    //         ],
    //         [
    //             'type' => 'file', // input fields type
    //             'data' => 'file', // data type, string, int, boolean
    //             'name' => 'app_sticky_logo', // unique name for field
    //             'label' => 'Sticky Logo', // you know what label it is
    //             'rules' => '', // validation rule of laravel
    //             'class' => '', // any class for input
    //             'value' => 'sticky_logo.png' // default value if you want
    //         ],
    //     ]
    // ],
    'app' => [
        'title' => 'General',
        'desc' => 'All the general settings for application.',
        'icon' => 'glyphicon glyphicon-sunglasses',

        'elements' => [
            // [
            //     'type' => 'text', // input fields type
            //     'data' => 'string', // data type, string, int, boolean
            //     'name' => 'app_name', // unique name for field
            //     'label' => 'App Name', // you know what label it is
            //     'rules' => 'min:2|max:50', // validation rule of laravel
            //     'class' => '', // any class for input
            //     'value' => 'Bay Economy Corporate Site' // default value if you want
            // ],
            [
                'type' => 'text',
                'data' => 'string',
                'name' => 'app_email',
                'label' => 'App Email',
                'rules' => 'email',
                'class' => '',
                'value' => 'info.bez@baygroupco.com'
            ],
            [
                'type' => 'text',
                'data' => 'string',
                'name' => 'app_contact',
                'label' => 'App Contact',
                'rules' => '',
                'class' => '',
                'value' => '+88028129302'
            ],
            // [
            //     'type' => 'number',
            //     'data' => 'string',
            //     'name' => 'app_fax',
            //     'label' => 'App Fax',
            //     'rules' => '',
            //     'class' => '',
            //     'value' => '0248951473'
            // ],
            [
                'type' => 'text',
                'data' => 'string',
                'name' => 'app_address',
                'label' => 'App Address',
                'rules' => '',
                'class' => '',
                'value' => 'Gazipur, Bangladesh'
            ],
            // [
            //     'type' => 'textarea',
            //     'data' => 'string',
            //     'name' => 'opening_hours',
            //     'label' => 'Opening Hours',
            //     'rules' => '',
            //     'class' => '',
            //     'value' => '9:00 am - 5:00 pm'
            // ],
            // [
            //     'type' => 'text',
            //     'data' => 'string',
            //     'name' => 'app_copyright',
            //     'label' => 'Copyright',
            //     'rules' => '',
            //     'class' => '',
            //     'value' => 'Copyright <i class=\'bx bx-copyright\'></i> 2020 | All rights reserved | Powered By <a target="_blank" href="https://www.bayit.com/">bayit</a>'
            // ]
        ]
    ],
    // 'seo' => [

    //     'title' => 'SEO',
    //     'desc' => 'SEO settings for app',
    //     'icon' => 'glyphicon glyphicon-globe',

    //     'elements' => [
    //         [
    //             'type' => 'text',
    //             'data' => 'string',
    //             'name' => 'title',
    //             'label' => 'Site Title',
    //             'rules' => '',
    //             'class' => '',
    //             'value' => 'Bay Economy'
    //         ],
    //         [
    //             'type' => 'text',
    //             'data' => 'string',
    //             'name' => 'meta_keywords',
    //             'label' => 'Meta keywords',
    //             'rules' => '',
    //             'class' => '',
    //             'value' => 'Bay Economy'
    //         ],
    //         [
    //             'type' => 'textarea',
    //             'data' => 'string',
    //             'name' => 'meta_description',
    //             'label' => 'Meta description',
    //             'rules' => '',
    //             'class' => '',
    //             'value' => ''
    //         ],
    //     ]
    // ],
    'about-us' => [

        'title' => 'About Us',
        'desc' => 'About Us Content',
        'icon' => 'glyphicon glyphicon-envelope',

        'elements' => [
            [
                'type' => 'textarea',
                'data' => 'text',
                'name' => 'about_us_body',
                'label' => 'About Us Body',
                'rules' => '',
                'class' => 'summernote',
                'value' => '
                            <div class="pftext">
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
                                    fulfillment of not only domestic demand but also foreign &amp; export investors:</p>

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
                                <strong>Certification / Approvals &amp; Permissions:</strong>
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
                            </div>'
            ],
        ]
    ],
    'facilities' => [

        'title' => 'Facilities',
        'desc' => 'Facilities Content',
        'icon' => 'glyphicon glyphicon-envelope',

        'elements' => [
            [
                'type' => 'textarea',
                'data' => 'text',
                'name' => 'facilities_body',
                'label' => 'Facilities Body',
                'rules' => '',
                'class' => 'summernote',
                'value' => '
                    <div class="pftext">
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
                            <li>Training center&amp; Administrative building etc.</li>
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
                                    <p>1st 10 years – 100%</p>
                                    <p>11th year – 70%</p>
                                    <p>12th&nbsp;&nbsp; year – 30%</p>
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
                    </div>
                '
            ],
        ]
    ],
    'explore' => [

        'title' => 'Explore',
        'desc' => 'Explore Content',
        'icon' => 'glyphicon glyphicon-envelope',

        'elements' => [
            [
                'type' => 'text',
                'data' => 'string',
                'name' => 'explore_tab_1_title',
                'label' => 'Explore Tab 1 Title',
                'rules' => '',
                'class' => '',
                'value' => 'Economic and Social Highlights'
            ],
            [
                'type' => 'textarea',
                'data' => 'text',
                'name' => 'explore_tab_1_body',
                'label' => 'Explore Tab 1 Body',
                'rules' => '',
                'class' => 'summernote',
                'value' => '

                    <p><i class="fa fa-arrow-right"></i> Consistent GDP Growth Rate(last one decade)  more than 6.0%</p>
                    <p><i class="fa fa-arrow-right"></i> Per Capita GNI $1,940</p>
                    <p><i class="fa fa-arrow-right"></i> Annual FDI Inflows $ 1.7 Billion</p>
                    <p><i class="fa fa-arrow-right"></i> Export Earnings of $33.6 Billion</p>
                    <p><i class="fa fa-arrow-right"></i> Foreign Exchange Reserve (Feb 2021) $41.9 Billion</p>
                    <p><i class="fa fa-arrow-right"></i> 127 million mobile subscribers (79% of total Population) and 48 million internet users (30% of Total Population)</p>
                '
            ],
            [
                'type' => 'text',
                'data' => 'string',
                'name' => 'explore_tab_2_title',
                'label' => 'Explore Tab 2 Title',
                'rules' => '',
                'class' => '',
                'value' => 'Why Invest in Bangladesh'
            ],
            [
                'type' => 'textarea',
                'data' => 'text',
                'name' => 'explore_tab_2_body',
                'label' => 'Explore Tab 2 Body',
                'rules' => '',
                'class' => 'summernote',
                'value' => '
                    <p><i class="fa fa-arrow-right"></i> <strong>Energy:</strong> The Government of Bangladesh guarantees uninterrupted quality power to EZ’s.</p>
                    <p><i class="fa fa-arrow-right"></i> <strong>Manpower:.</strong> With the 8th largest population, 160 million Bangladesh blessed with “Demographic Dividend” from Day labor to senior management, are ready to work</p>
                    <p><i class="fa fa-arrow-right"></i> <strong>Business Friendly:.</strong> The Government of Bangladesh fully supports the EZ movement and has taken the initiative to establish100 new economic zones throughout the country within 15 years.</p>
                    <p><i class="fa fa-arrow-right"></i> <strong>High-Growth Rate :</strong> Building on a consistent growth rate of 6% on average since 1994, the Government of Bangladesh aims to transform the country into a middle income country by 2021.</p>
                    <p><i class="fa fa-arrow-right"></i> <strong>Strategic location:</strong> Bangladesh being at the apex of the Bay of Bengal with India and other SAARC countries to the west, Japan, Korea, China and other ASEAN countries to the east, can emerge as a Mega Asian Growth Triangle for huge local and foreign markets.</p>
                    <p><i class="fa fa-arrow-right"></i> <strong>Performances of Existing EPZs are encouraging:</strong> Current performance of existing export processing zones (18%+ of national exports &amp; 0.4 million employments) is favorable and encouraging.</p>
                '
            ],
            [
                'type' => 'text',
                'data' => 'string',
                'name' => 'explore_tab_3_title',
                'label' => 'Explore Tab 3 Title',
                'rules' => '',
                'class' => '',
                'value' => 'Why Economic Zone'
            ],
            [
                'type' => 'textarea',
                'data' => 'text',
                'name' => 'explore_tab_3_body',
                'label' => 'Explore Tab 3 Body',
                'rules' => '',
                'class' => 'summernote',
                'value' => '
                    <p><i class="fa fa-arrow-right"></i> All existing 8 EPZs are almost fully occupied with tenants; but contributions of Industry and Service sectors to GDP are increasing.</p>
                    <p><i class="fa fa-arrow-right"></i> Unsystematic industrialization in and around Dhaka city without special incentive package; excessive pressure of people on Dhaka with huge traffic jam and environmental degradation.</p>
                    <p><i class="fa fa-arrow-right"></i> Country’s lion shares of FDI (More than 80%) comes from Telco and Gas &amp; Petroleum; To attract FDI from different industries and diversify export, EZ is the best solution with comprehensive facilities &amp; incentives.</p>
                    <p><i class="fa fa-arrow-right"></i> India,Vietnam, China, Philippines are ideal example of successful decentralized industrialization in EZs/SEZs for more than three decades. So why not Bangladesh?</p>
                '
            ],
            [
                'type' => 'text',
                'data' => 'string',
                'name' => 'explore_tab_4_title',
                'label' => 'Explore Tab 4 Title',
                'rules' => '',
                'class' => '',
                'value' => 'Competitive Incentives'
            ],
            [
                'type' => 'textarea',
                'data' => 'text',
                'name' => 'explore_tab_4_body',
                'label' => 'Explore Tab 4 Body',
                'rules' => '',
                'class' => 'summernote',
                'value' => '
                    <table class="table table-bordered">
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
                                <p>1st 10 years – 100%</p>
                                <p>11th year – 70%</p>
                                <p>12th year – 30%</p>
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
                    </table>
                '
            ],

        ]
    ],


    // 'counter-section' => [

    //     'title' => 'Counter Section',
    //     'desc' => 'Counter Section In HomePage',
    //     'icon' => 'glyphicon glyphicon-envelope',

    //     'elements' => [
    //         [
    //             'type' => 'text',
    //             'data' => 'string',
    //             'name' => 'counter_1_title',
    //             'label' => 'Counter 1 Title',
    //             'rules' => '',
    //             'class' => '',
    //             'value' => 'Satisfied Students'
    //         ],
    //         [
    //             'type' => 'file', // input fields type
    //             'data' => 'file', // data type, string, int, boolean
    //             'name' => 'counter_1_icon', // unique name for field
    //             'label' => 'Counter 1 Icon', // you know what label it is
    //             'rules' => '', // validation rule of laravel
    //             'class' => '', // any class for input
    //             'value' => 'counter_1_icon.png' // default value if you want
    //         ],
    //         [
    //             'type' => 'number',
    //             'data' => 'string',
    //             'name' => 'counter_1_number',
    //             'label' => 'Counter 1 Number',
    //             'rules' => '',
    //             'class' => '',
    //             'value' => '12558'
    //         ],
    //         [
    //             'type' => 'text',
    //             'data' => 'string',
    //             'name' => 'counter_2_title',
    //             'label' => 'Counter 2 Title',
    //             'rules' => '',
    //             'class' => '',
    //             'value' => 'Courses Completed'
    //         ],
    //         [
    //             'type' => 'file', // input fields type
    //             'data' => 'file', // data type, string, int, boolean
    //             'name' => 'counter_2_icon', // unique name for field
    //             'label' => 'Counter 2 Icon', // you know what label it is
    //             'rules' => '', // validation rule of laravel
    //             'class' => '', // any class for input
    //             'value' => 'counter_2_icon.png' // default value if you want
    //         ],
    //         [
    //             'type' => 'number',
    //             'data' => 'string',
    //             'name' => 'counter_2_number',
    //             'label' => 'Counter 2 Number',
    //             'rules' => '',
    //             'class' => '',
    //             'value' => '8975'
    //         ],
    //         [
    //             'type' => 'text',
    //             'data' => 'string',
    //             'name' => 'counter_3_title',
    //             'label' => 'Counter 3 Title',
    //             'rules' => '',
    //             'class' => '',
    //             'value' => 'Satisfied Students'
    //         ],
    //         [
    //             'type' => 'file', // input fields type
    //             'data' => 'file', // data type, string, int, boolean
    //             'name' => 'counter_3_icon', // unique name for field
    //             'label' => 'Counter 3 Icon', // you know what label it is
    //             'rules' => '', // validation rule of laravel
    //             'class' => '', // any class for input
    //             'value' => 'counter_3_icon.png' // default value if you want
    //         ],
    //         [
    //             'type' => 'number',
    //             'data' => 'string',
    //             'name' => 'counter_3_number',
    //             'label' => 'Counter 3 Number',
    //             'rules' => '',
    //             'class' => '',
    //             'value' => '6849'
    //         ],
    //         [
    //             'type' => 'text',
    //             'data' => 'string',
    //             'name' => 'counter_4_title',
    //             'label' => 'Counter 4 Title',
    //             'rules' => '',
    //             'class' => '',
    //             'value' => 'Expert Advisors'
    //         ],
    //         [
    //             'type' => 'file', // input fields type
    //             'data' => 'file', // data type, string, int, boolean
    //             'name' => 'counter_4_icon', // unique name for field
    //             'label' => 'Counter 4 Icon', // you know what label it is
    //             'rules' => '', // validation rule of laravel
    //             'class' => '', // any class for input
    //             'value' => 'counter_4_icon.png' // default value if you want
    //         ],
    //         [
    //             'type' => 'number',
    //             'data' => 'string',
    //             'name' => 'counter_4_number',
    //             'label' => 'Counter 4 Number',
    //             'rules' => '',
    //             'class' => '',
    //             'value' => '380'
    //         ],
    //     ]
    // ],

    // 'testimonial-section' => [

    //     'title' => 'Testimonial Section',
    //     'desc' => 'Testimonial Section In HomePage',
    //     'icon' => 'glyphicon glyphicon-envelope',

    //     'elements' => [
    //         [
    //             'type' => 'text',
    //             'data' => 'string',
    //             'name' => 'testimonial_section_title',
    //             'label' => 'Title',
    //             'rules' => '',
    //             'class' => '',
    //             'value' => 'What Our Customer Say'
    //         ],
    //         [
    //             'type' => 'textarea',
    //             'data' => 'string',
    //             'name' => 'testimonial_section_description',
    //             'label' => 'Description',
    //             'rules' => '',
    //             'class' => '',
    //             'value' => 'Lorem Ipsum is simply dummy text of the printing and typesetting Lorem Ipsum is simply dummy text of the printing.'
    //         ],
    //         [
    //             'type' => 'file', // input fields type
    //             'data' => 'file', // data type, string, int, boolean
    //             'name' => 'testimonial_section_bg', // unique name for field
    //             'label' => 'testimonial Section Bg', // you know what label it is
    //             'rules' => '', // validation rule of laravel
    //             'class' => '', // any class for input
    //             'value' => 'testimonial_section_bg.png' // default value if you want
    //         ],
    //     ]
    // ],


    // 'social' => [

    //     'title' => 'Social',
    //     'desc' => 'Social settings for app',
    //     'icon' => 'glyphicon glyphicon-envelope',

    //     'elements' => [
    //         [
    //             'type' => 'text',
    //             'data' => 'string',
    //             'name' => 'social_fb',
    //             'label' => 'Facebook Link',
    //             'rules' => '',
    //             'class' => '',
    //             'value' => 'https://facebook.com/bayit/'
    //         ],
    //         [
    //             'type' => 'text',
    //             'data' => 'string',
    //             'name' => 'social_twitter',
    //             'label' => 'Twitter Link',
    //             'rules' => '',
    //             'class' => '',
    //             'value' => 'http://twitter.com/bayit'
    //         ],
    //         [
    //             'type' => 'text',
    //             'data' => 'string',
    //             'name' => 'social_instagram',
    //             'label' => 'Instagram Link',
    //             'rules' => '',
    //             'class' => '',
    //             'value' => 'http://instagram.com/bayit'
    //         ],
    //         [
    //             'type' => 'text',
    //             'data' => 'string',
    //             'name' => 'social_youtube',
    //             'label' => 'Youtube Link',
    //             'rules' => '',
    //             'class' => '',
    //             'value' => ''
    //         ],
    //         [
    //             'type' => 'text',
    //             'data' => 'string',
    //             'name' => 'social_linkedin',
    //             'label' => 'Linkedin Link',
    //             'rules' => '',
    //             'class' => '',
    //             'value' => ''
    //         ],
    //         [
    //             'type' => 'text',
    //             'data' => 'string',
    //             'name' => 'social_skype',
    //             'label' => 'Skype Link',
    //             'rules' => '',
    //             'class' => '',
    //             'value' => ''
    //         ],
    //         [
    //             'type' => 'text',
    //             'data' => 'string',
    //             'name' => 'social_whatsapp',
    //             'label' => 'WhatsApp Link',
    //             'rules' => '',
    //             'class' => '',
    //             'value' => ''
    //         ],
    //         [
    //             'type' => 'text',
    //             'data' => 'string',
    //             'name' => 'social_viber',
    //             'label' => 'Viber Link',
    //             'rules' => '',
    //             'class' => '',
    //             'value' => ''
    //         ],
    //         [
    //             'type' => 'text',
    //             'data' => 'string',
    //             'name' => 'social_wechat',
    //             'label' => 'WeChat Link',
    //             'rules' => '',
    //             'class' => '',
    //             'value' => ''
    //         ],
    //         [
    //             'type' => 'text',
    //             'data' => 'string',
    //             'name' => 'social_pinterest',
    //             'label' => 'Pinterest Link',
    //             'rules' => '',
    //             'class' => '',
    //             'value' => ''
    //         ],
    //     ]
    // ],

    'footer' => [
        'title' => 'Footer',
        'desc' => 'All the general settings for footer.',
        'icon' => 'glyphicon glyphicon-sunglasses',

        'elements' => [
            [
                'type' => 'textarea', // input fields type
                'data' => 'string', // data type, string, int, boolean
                'name' => 'footer_quote', // unique name for field
                'label' => 'Quote', // you know what label it is
                'rules' => '', // validation rule of laravel
                'class' => '', // any class for input
                'value' => 'Bay economic zone is a privately owned industrial area which is located at a fairly close proximity to the core of Dhaka.' // default value if you want
            ],
        ]
    ],
    // 'custom' => [

    //     'title' => 'Style/Js',
    //     'desc' => 'Custom Style / JS',
    //     'icon' => 'glyphicon glyphicon-globe',

    //     'elements' => [
    //         [
    //             'type' => 'textarea',
    //             'data' => 'text',
    //             'name' => 'custom_css',
    //             'label' => 'Custom Css',
    //             'rules' => '',
    //             'class' => '',
    //             'value' => ''
    //         ],
    //         [
    //             'type' => 'textarea',
    //             'data' => 'text',
    //             'name' => 'custom_js',
    //             'label' => 'Custom JS',
    //             'rules' => '',
    //             'class' => '',
    //             'value' => ''
    //         ],
    //     ]
    // ],
]

?>
