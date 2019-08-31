@extends('layouts.pages')

@section('title', 'Committees')

@section('content')
<div class="col s12">
    <section class="blue" style="padding:1px;">
        <div class="container">
            <div class="row row-noclear">
                <h1 class="header center-on-small-only white-text" style="padding-top: 30px;">Committees</h1>
                <h4 class="light white-text text-lighten-4 center-on-small-only">Committees and Topics for CADMUN 2019</h4>
                <article class="card col s12" style="animation-duration: 0.5s;" class="animated bounceInUp">
                    <section class="card-content">
                        <div class="card-content">

                            <!-- General Assembly -->
                            <div class="col s12 m8 offset-m2">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="row">
                                            <div class="col s12 m4">
                                                <p align="center">
                                                    <img src="assets/img/committees/ga1.png" class="responsive-img materialboxed" alt="">
                                                </p>
                                            </div>
                                            <div class="col s12 m8">
                                                <h2 class="card-title center-align">General Assembly</h2>
                                                <p align="justify">The General Assembly is the main deliberating and policymaking committee, and the main organ of the UN. Decisions on important questions, such as those on peace and security come
                                                    under the supervision of the General Assembly.</p>
                                                <!-- Modal Structure -->
                                                <div id="modalGA" class="modal">
                                                    <div class="modal-content">
                                                        <div class="container">
                                                            <h4 class="center-align">General Assembly</h4>
                                                            <p align="center">
                                                                <img src="assets/img/committees/ga1.png" class="responsive-img materialboxed" alt="">
                                                            </p>
                                                            <p align="justify">The General Assembly is one of the six main organs of the United Nations, the only one in which all Member States have equal representation: one nation, one vote. All 193
                                                                Member States of the United Nations are represented in this unique forum to discuss and work together on a wide array of international issues covered by the UN Charter, such as
                                                                development, peace and security, international law. In September, all members meet in the General Assembly Hall in New York for the Annual General Assembly session.</p>
                                                            <ul class="collapsible popout" data-collapsible="accordion">
                                                                <li>
                                                                    <div class="collapsible-header"><i class="material-icons">filter_list</i>Topic A: The Impact of Climate Change on Global Security</div>
                                                                    <div class="collapsible-body">
                                                                        <a href="/assets/downloads/pdf/GATopicA.pdf" target="_blank" class="btn-flat"><i class="material-icons left">picture_as_pdf</i>Download</a>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="collapsible-header"><i class="material-icons">filter_list</i>Topic B: Possible crisis</div>
                                                                    <!--div class="collapsible-body">
                                                                        <a href="/assets/downloads/pdf/ga-pp-B.pdf" target="_blank" class="btn-flat"><i class="material-icons left">
                                                                                picture_as_pdf
                                                                            </i>Download</a>
                                                                    </div-->
                                                                </li>
                                                            </ul>
                                                            <div class="row center-align">
                                                                <div class="col s12 center-align">
                                                                    <div class="chip cyan white-text">
                                                                        10th
                                                                    </div>
                                                                    <div class="chip cyan white-text">
                                                                        11th
                                                                    </div>
                                                                    <div class="chip cyan white-text">
                                                                        12th
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <a href="#!" class="modal-action modal-close waves-effect waves-blue btn-flat">Close</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-action center-align">
                                        <a class="waves-effect waves-light modal-trigger blue-text" href="#modalGA">Read more</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Security Council -->
                            <div class="col s12 m8 offset-m2">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="row">
                                            <div class="col s12 m4">
                                                <p align="center">
                                                    <img src="assets/img/committees/sc.png" class="responsive-img materialboxed" alt="">
                                                </p>
                                            </div>
                                            <div class="col s12 m8">
                                                <h2 class="card-title center-align">Security Council</h2>
                                                <p align="justify">The Security Council has the primary responsibility, under the UN Charter, for the maintenance of international peace and security. The Security Council takes the lead in determining
                                                    the existence of a threat to peace or act of aggression. It calls upon the parties of a dispute to settle it through peaceful means and recommends methods of adjustment or terms of settlement.</p>
                                                <!-- Modal Structure -->
                                                <div id="modalSC" class="modal">
                                                    <div class="modal-content">
                                                        <div class="container">
                                                            <h4 class="center-align">Security Council</h4>
                                                            <p align="center">
                                                                <img src="assets/img/committees/sc.png" class="responsive-img materialboxed" alt="">
                                                            </p>
                                                            <p align="justify">The Security Council is the United Nation&#39;s most powerful body, with &quot;primary responsibility for the maintenance of international peace and security.&quot; Five
                                                                powerful countries sit as &quot;permanent members&quot; along with ten elected members with two-year terms. Since 1990, the Council has dramatically increased its activity and it now
                                                                meets in nearly continuous session. It is responsible for things such as military operations, imposing sanctions, mandating arms inspections, and deploying election monitors.</p>
                                                            <ul class="collapsible popout" data-collapsible="accordion">
                                                                <li>
                                                                    <div class="collapsible-header"><i class="material-icons">filter_list</i>Topic A: Nuclear Provocation in the Korean Peninsula</div>
                                                                    <div class="collapsible-body">
                                                                        <a href="/assets/downloads/pdf/SCTopicA.pdf" target="_blank" class="btn-flat"><i class="material-icons left">
                                                                                picture_as_pdf
                                                                            </i>Download</a>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="collapsible-header"><i class="material-icons">filter_list</i>Topic B: Addressing the Situation in Yemen</div>
                                                                    <div class="collapsible-body">
                                                                        <a href="/assets/downloads/pdf/SCTopicB.pdf" target="_blank" class="btn-flat"><i class="material-icons left">
                                                                                picture_as_pdf
                                                                            </i>Download</a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                            <div class="row center-align">
                                                                <div class="col s12 center-align">
                                                                    <div class="chip cyan white-text">
                                                                        10th
                                                                    </div>
                                                                    <div class="chip cyan white-text">
                                                                        11th
                                                                    </div>
                                                                    <div class="chip cyan white-text">
                                                                        12th
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <a href="#!" class="modal-action modal-close waves-effect waves-blue btn-flat">Close</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-action center-align">
                                        <a class="waves-effect waves-light modal-trigger blue-text" href="#modalSC">Read more</a>
                                    </div>
                                </div>
                            </div>

                            <!-- United Nations Office for Disarmament Affairs -->
                            <!--div class="col s12 m8 offset-m2">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="row">
                                            <div class="col s12 m4">
                                                <p align="center">
                                                    <img src="assets/img/committees/unoda1.png" class="responsive-img materialboxed" alt="">
                                                </p>
                                            </div>
                                            <div class="col s12 m8">
                                                <h2 class="card-title center-align">United Nations Office for Disarmament Affairs</h2>
                                                <p align="justify">UNODA committee fosters disarmament measures through dialogue, transparency and confidence-building surrounding military matters, and encourages regional disarmament efforts. </p-->
                            <!-- Modal Structure -->
                            <!--div id="modalUNODA" class="modal">
                                                    <div class="modal-content">
                                                        <div class="container">
                                                            <h4 class="center-align">United Nations Office for Disarmament Affairs</h4>
                                                            <p align="center">
                                                                <img src="assets/img/committees/unoda2.png" class="responsive-img materialboxed" alt="">
                                                            </p>
                                                            <p align="justify">UNODA provides substantive and organizational support for norm-setting in the area of disarmament through the work of the General Assembly and its First Committee, the
                                                                Disarmament Commission, the
                                                                Conference on Disarmament and other bodies. It fosters disarmament measures through dialogue, transparency and confidence-building on military matters, and encourages regional
                                                                disarmament efforts; these include the
                                                                United Nations Register of Conventional Arms and regional forums. It also provides objective, impartial and up-to-date information on multilateral disarmament issues and activities to
                                                                Member States, States parties to
                                                                multilateral agreements, intergovernmental organizations and institutions, departments and agencies of the United Nations system, research and educational institutions, civil society,
                                                                especially non-governmental
                                                                organizations, the media and the general public.</p>
                                                            <ul class="collapsible popout" data-collapsible="accordion">
                                                                <li>
                                                                    <div class="collapsible-header"><i class="material-icons">filter_list</i>Topic A: Discussing potential cyber warfarethreats and possible regulations.</div>
                                                                    <div class="collapsible-body">
                                                                        <a href="/assets/downloads/pdf/ga-pp-A.pdf" target="_blank" class="btn-flat"><i class="material-icons left">picture_as_pdf</i>Download</a>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="collapsible-header"><i class="material-icons">filter_list</i>Topic B: Regulating drone warfare and its effect on civilian casualties.</div>
                                                                    <div class="collapsible-body">
                                                                        <a href="/assets/downloads/pdf/ga-pp-B.pdf" target="_blank" class="btn-flat"><i class="material-icons left">
                                                                                picture_as_pdf
                                                                            </i>Download</a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                            <div class="row center-align">
                                                                <div class="col s12 center-align">
                                                                    <div class="chip cyan white-text">
                                                                        9th
                                                                    </div>
                                                                    <div class="chip cyan white-text">
                                                                        10th
                                                                    </div>
                                                                    <div class="chip cyan white-text">
                                                                        11th
                                                                    </div>
                                                                    <div class="chip cyan white-text">
                                                                        12th
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <a href="#!" class="modal-action modal-close waves-effect waves-blue btn-flat">Close</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-action center-align">
                                        <a class="waves-effect waves-light modal-trigger blue-text" href="#modalUNODA">Read more</a>
                                    </div>
                                </div>
                            </div-->

                            <!-- Economic and Social Council -->
                            <div class="col s12 m8 offset-m2">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="row">
                                            <div class="col s12 m4">
                                                <p align="center">
                                                    <img src="assets/img/committees/ecosoc.png" class="responsive-img materialboxed" alt="">
                                                </p>
                                            </div>
                                            <div class="col s12 m8">
                                                <h2 class="card-title center-align">Economic and Social Council</h2>
                                                <p align="justify">The Economic and Social Council is at the heart of the United Nations system to advance the three dimensions of sustainable development, the economic, social and environmental. It is
                                                    the central platform for fostering debate and innovative thinking, forging consensus on ways forward, and coordinating efforts to achieve internationally agreed goals for the betterment of the
                                                    world’s economy and society.</p>
                                                <!-- Modal Structure -->
                                                <div id="modalECOSOC" class="modal">
                                                    <div class="modal-content">
                                                        <div class="container">
                                                            <h4 class="center-align">Economic and Social Council</h4>
                                                            <p align="center">
                                                                <img src="assets/img/committees/ecosoc.png" class="responsive-img materialboxed" alt="">
                                                            </p>
                                                            <p align="justify">It is also responsible for the follow-up to major UN conferences and summits. The UN Charter established ECOSOC in 1945 as one of the six main organs of the United
                                                                Nations. ECOSOC links a diverse family of UN entities dedicated to sustainable development, providing overall guidance and coordination. The entities include regional economic and
                                                                social commissions, functional commissions facilitating intergovernmental discussions of major global issues, and specialized agencies, programmes and funds work around the world to
                                                                translate development commitments into real changes in people’s lives.</p>
                                                            <ul class="collapsible popout" data-collapsible="accordion">
                                                                <li>
                                                                    <div class="collapsible-header"><i class="material-icons">filter_list</i>Topic A: The Influence of Technology on the Global Economy Gap</div>
                                                                    <div class="collapsible-body">
                                                                        <a href="/assets/downloads/pdf/ECOSOCTopicA.pdf" target="_blank" class="btn-flat"><i class="material-icons left">picture_as_pdf</i>Download</a>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="collapsible-header"><i class="material-icons">filter_list</i>Topic B: The International Regulation of Crypto Currency</div>
                                                                    <div class="collapsible-body">
                                                                        <a href="/assets/downloads/pdf/ECOSOCTopicB.pdf" target="_blank" class="btn-flat"><i class="material-icons left">
                                                                                picture_as_pdf
                                                                            </i>Download</a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                            <div class="row center-align">
                                                                <div class="col s12 center-align">
                                                                    <div class="chip cyan white-text">
                                                                        10th
                                                                    </div>
                                                                    <div class="chip cyan white-text">
                                                                        11th
                                                                    </div>
                                                                    <div class="chip cyan white-text">
                                                                        12th
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <a href="#!" class="modal-action modal-close waves-effect waves-blue btn-flat">Close</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-action center-align">
                                        <a class="waves-effect waves-light modal-trigger blue-text" href="#modalECOSOC">Read more</a>
                                    </div>
                                </div>
                            </div>

                            <!-- World Health Organization -->
                            <div class="col s12 m8 offset-m2">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="row">
                                            <div class="col s12 m4">
                                                <p align="center">
                                                    <img src="assets/img/committees/who1.jpg" class="responsive-img materialboxed" alt="">
                                                </p>
                                            </div>
                                            <div class="col s12 m8">
                                                <h2 class="card-title center-align">World Health Organization</h2>
                                                <p align="justify">The World Health Organization's goal is to build a better, healthier future for people all over the world. Working through offices in more than 150 countries, WHO staff work side by
                                                    side with governments and other partners to ensure the highest attainable level of health for all people. </p>
                                                <!-- Modal Structure -->
                                                <div id="modalWHO" class="modal">
                                                    <div class="modal-content">
                                                        <div class="container">
                                                            <h4 class="center-align">World Health Organization</h4>
                                                            <p align="center">
                                                                <img src="assets/img/committees/who1.jpg" class="responsive-img materialboxed" alt="">
                                                            </p>
                                                            <p align="justify">The World Health Organization's goal is to build a better, healthier future for people all over the world. Working through offices in more than 150 countries, WHO staff
                                                                work side by side with governments and other partners to ensure the highest attainable level of health for all people.</p>
                                                            <ul class="collapsible popout" data-collapsible="accordion">
                                                                <li>
                                                                    <div class="collapsible-header"><i class="material-icons">filter_list</i>Topic A: Addressing Mental Health in Protracted Humanitarian Crises</div>
                                                                    <div class="collapsible-body">
                                                                        <a href="/assets/downloads/pdf/WHOTopicA.pdf" target="_blank" class="btn-flat"><i class="material-icons left">picture_as_pdf</i>Download</a>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="collapsible-header"><i class="material-icons">filter_list</i>Topic B: Legalization of Fracking Regarding its Health Consequences</div>
                                                                    <div class="collapsible-body">
                                                                        <a href="/assets/downloads/pdf/WHOTopicB.pdf" target="_blank" class="btn-flat"><i class="material-icons left">
                                                                                picture_as_pdf
                                                                            </i>Download</a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                            <div class="row center-align">
                                                                <div class="col s12 center-align">
                                                                    <div class="chip cyan white-text">
                                                                        7th
                                                                    </div>
                                                                    <div class="chip cyan white-text">
                                                                        8th
                                                                    </div>
                                                                    <div class="chip cyan white-text">
                                                                        9th
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <a href="#!" class="modal-action modal-close waves-effect waves-blue btn-flat">Close</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-action center-align">
                                        <a class="waves-effect waves-light modal-trigger blue-text" href="#modalWHO">Read more</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Human Rights -->
                            <div class="col s12 m8 offset-m2">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="row">
                                            <div class="col s12 m4">
                                                <p align="center">
                                                    <img src="assets/img/committees/humanrights1.png" class="responsive-img materialboxed" alt="">
                                                </p>
                                            </div>
                                            <div class="col s12 m8">
                                                <h2 class="card-title center-align">Human Rights</h2>
                                                <p align="justify">The Human Rights Committee is a group of independent experts who oversee the implementation of all human rights according to the International Declaration of Human Rights. All State
                                                    parties are obliged to report to the committee on how these rights are being implemented. The initial report is an annual one and thereafter whenever the committee sees fit, normally every four
                                                    years. The committee makes sure that each report has its concerns addressed in the right full manner by giving the State party recommendations on how to address and resolve certain problems. </p>
                                                <!-- Modal Structure -->
                                                <div id="modalHR" class="modal">
                                                    <div class="modal-content">
                                                        <div class="container">
                                                            <h4 class="center-align">Human Rights</h4>
                                                            <p align="center">
                                                                <img src="assets/img/committees/humanrights.png" class="responsive-img materialboxed" alt="">
                                                            </p>
                                                            <p align="justify">The Human Rights Committee is the body of independent experts that monitors implementation of the International Covenant on Civil and Political Rights by its State
                                                                parties. All States parties are obliged to submit regular reports to the Committee on how the rights are being implemented. States must report initially one year after acceding to the
                                                                Covenant and then whenever the Committee requests (usually every four years). The Committee examines each report and addresses its concerns and recommendations to the State party in the
                                                                form of "concluding observations”.</p>
                                                            <ul class="collapsible popout" data-collapsible="accordion">
                                                                <li>
                                                                    <div class="collapsible-header"><i class="material-icons">filter_list</i>Topic A: Human Rights of Unaccompanied Migrant Children and Adolescents</div>
                                                                    <div class="collapsible-body">
                                                                        <a href="/assets/downloads/pdf/HRTopicA.pdf" target="_blank" class="btn-flat"><i class="material-icons left">picture_as_pdf</i>Download</a>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="collapsible-header"><i class="material-icons">filter_list</i>Topic B: Preservation of Human Rights in War Torn Countries</div>
                                                                    <div class="collapsible-body">
                                                                        <a href="/assets/downloads/pdf/HRTopicB.pdf" target="_blank" class="btn-flat"><i class="material-icons left">
                                                                                picture_as_pdf
                                                                            </i>Download</a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                            <div class="row center-align">
                                                                <div class="col s12 center-align">
                                                                    <div class="chip cyan white-text">
                                                                        7th
                                                                    </div>
                                                                    <div class="chip cyan white-text">
                                                                        8th
                                                                    </div>
                                                                    <div class="chip cyan white-text">
                                                                        9th
                                                                    </div>
                                                                    <div class="chip cyan white-text">
                                                                        10th
                                                                    </div>
                                                                    <div class="chip cyan white-text">
                                                                        11th
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <a href="#!" class="modal-action modal-close waves-effect waves-blue btn-flat">Close</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-action center-align">
                                        <a class="waves-effect waves-light modal-trigger blue-text" href="#modalHR">Read more</a>
                                    </div>
                                </div>
                            </div>

                            <!-- World Food Programme -->
                            <div class="col s12 m8 offset-m2">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="row">
                                            <div class="col s12 m4">
                                                <p align="center">
                                                    <img src="assets/img/committees/wfp.jpg" class="responsive-img materialboxed" alt="">
                                                </p>
                                            </div>
                                            <div class="col s12 m8">
                                                <h2 class="card-title center-align">World Food Programme</h2>
                                                <p align="justify">The World Food Programme is a leading humanitarian organization its objectives of which are to save and to change lives. It is mainly in charge of delivering food assistance in
                                                    emergencies and working with communities to improve nutrition and build resilience.</p>
                                                <!-- Modal Structure -->
                                                <div id="modalUNODC" class="modal">
                                                    <div class="modal-content">
                                                        <div class="container">
                                                            <h4 class="center-align">World Food Programme</h4>
                                                            <p align="center">
                                                                <img src="assets/img/committees/wfp.png" class="responsive-img materialboxed" alt="">
                                                            </p>
                                                            <p align="justify">The World Food Programme is a leading humanitarian organization its objectives of which are to save and to change lives. It is mainly in charge of delivering food
                                                                assistance in emergencies and working with communities to improve nutrition and build resilience. This programme is fully committed to end hunger, achieve food security, and improve
                                                                nutrition for 2030. The World Food Programme assists approximately 91.4 million people in about 83 countries. WFP is in charge of providing food assistance to victims which have endured
                                                                war, civil conflict, drought, floods, earthquakes, hurricanes, crop failures and other natural disasters. It provides programmes that target malnutrition especially for children and
                                                                mothers. The WFP works with the Food and Agriculture Organization of the United Nations and The International Fund for Agricultural Development to fulfill their ultimate goal which is
                                                                zero hunger in the world.
                                                            </p>
                                                            <ul class="collapsible popout" data-collapsible="accordion">
                                                                <li>
                                                                    <div class="collapsible-header"><i class="material-icons">filter_list</i>Topic A: Improving Emergency Response Capacities to Safeguard Food Security.</div>
                                                                    <div class="collapsible-body">
                                                                        <a href="/assets/downloads/pdf/WFPTopicA.pdf" target="_blank" class="btn-flat"><i class="material-icons left">picture_as_pdf</i>Download</a>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="collapsible-header"><i class="material-icons">filter_list</i>Topic B: Responding to Food Insecurity in Syria.</div>
                                                                    <div class="collapsible-body">
                                                                        <a href="/assets/downloads/pdf/WFPTopicB.pdf" target="_blank" class="btn-flat"><i class="material-icons left">
                                                                                picture_as_pdf
                                                                            </i>Download</a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                            <div class="row center-align">
                                                                <div class="col s12 center-align">
                                                                    <div class="chip cyan white-text">
                                                                        7th
                                                                    </div>
                                                                    <div class="chip cyan white-text">
                                                                        8th
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <a href="#!" class="modal-action modal-close waves-effect waves-blue btn-flat">Close</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-action center-align">
                                        <a class="waves-effect waves-light modal-trigger blue-text" href="#modalUNODC">Read more</a>
                                    </div>
                                </div>
                            </div>

                            <!-- United Nations Entity for Gender Equality and the Empowerment of Women -->
                            <div class="col s12 m8 offset-m2">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="row">
                                            <div class="col s12 m4">
                                                <p align="center">
                                                    <img src="assets/img/committees/unwomen.png" class="responsive-img materialboxed" alt="">
                                                </p>
                                            </div>
                                            <div class="col s12 m8">
                                                <h2 class="card-title center-align">United Nations Entity for Gender Equality and the Empowerment of Women</h2>
                                                <p align="justify">UN Women is the United Nations organization dedicated to gender equality and the empowerment of women. A global champion for women and girls, UN Women was established to accelerate
                                                    progress of meeting their needs worldwide. UN Women supports member states as they set global standards for achieving gender equality, and works with governments and civil society to design laws,
                                                    policies, programmes and services needed to ensure that the standards are effectively implemented and truly benefit women and girls worldwide.</p>
                                                <!-- Modal Structure -->
                                                <div id="modalUNWOMEN" class="modal">
                                                    <div class="modal-content">
                                                        <div class="container">
                                                            <h4 class="center-align">United Nations Entity for Gender Equality and the Empowerment of Women</h4>
                                                            <p align="center">
                                                                <img src="assets/img/committees/unwomen.png" class="responsive-img materialboxed" alt="">
                                                            </p>
                                                            <p align="justify">It works globally to make the vision of the Sustainable Development Goals a reality for women and girls and stands behind women’s equal participation in all aspects of
                                                                life, focusing on four strategic priorities:
                                                                <ul class="collection">
                                                                    <li class="collection-item">Women lead, participate in and benefit equally from governance systems</li>
                                                                    <li class="collection-item">Women have income security, decent work and economic autonomy</li>
                                                                    <li class="collection-item">All women and girls live a life free from all forms of violence</li>
                                                                    <li class="collection-item">Women and girls contribute to and have greater influence in building sustainable peace and resilience, and benefit equally from the prevention of natural
                                                                        disasters and conflicts and humanitarian action</li>
                                                                </ul>
                                                            </p>
                                                            <ul class="collapsible popout" data-collapsible="accordion">
                                                                <li>
                                                                    <div class="collapsible-header"><i class="material-icons">filter_list</i>Topic A: Addressing Child and Forced Marriage</div>
                                                                    <div class="collapsible-body">
                                                                        <a href="/assets/downloads/pdf/UNWTopicA.pdf" target="_blank" class="btn-flat"><i class="material-icons left">picture_as_pdf</i>Download</a>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="collapsible-header"><i class="material-icons">filter_list</i>Topic B: Supporting the Involvement of Women in Government and Governmental Decision Making</div>
                                                                    <div class="collapsible-body">
                                                                        <a href="/assets/downloads/pdf/UNWTopicB.pdf" target="_blank" class="btn-flat"><i class="material-icons left">
                                                                                picture_as_pdf
                                                                            </i>Download</a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                            <div class="row center-align">
                                                                <div class="col s12 center-align">
                                                                    <div class="chip cyan white-text">
                                                                        7th
                                                                    </div>
                                                                    <div class="chip cyan white-text">
                                                                        8th
                                                                    </div>
                                                                    <div class="chip cyan white-text">
                                                                        9th
                                                                    </div>
                                                                    <div class="chip cyan white-text">
                                                                        10th
                                                                    </div>
                                                                    <div class="chip cyan white-text">
                                                                        11th
                                                                    </div>
                                                                    <div class="chip cyan white-text">
                                                                        12th
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <a href="#!" class="modal-action modal-close waves-effect waves-blue btn-flat">Close</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-action center-align">
                                        <a class="waves-effect waves-light modal-trigger blue-text" href="#modalUNWOMEN">Read more</a>
                                    </div>
                                </div>
                            </div>

                            <!-- United Nations Educational, Scientific and Cultural Organization -->
                            <div class="col s12 m8 offset-m2">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="row">
                                            <div class="col s12 m4">
                                                <p align="center">
                                                    <img src="assets/img/committees/unesco.jpeg" class="responsive-img materialboxed" alt="">
                                                </p>
                                            </div>
                                            <div class="col s12 m8">
                                                <h2 class="card-title center-align">United Nations Educational, Scientific and Cultural Organization</h2>
                                                <p align="justify">UNESCO is responsible for coordinating international cooperation in education, science, culture and communication. It strengthens the ties between nations and societies, and
                                                    mobilizes the wider public so that each child and citizen has access to a quality education; basic human rights, which are indispensable prerequisite for sustainable development.</p>
                                                <!-- Modal Structure -->
                                                <div id="modalUNESCO" class="modal">
                                                    <div class="modal-content">
                                                        <div class="container">
                                                            <h4 class="center-align">United Nations Educational, Scientific and Cultural Organization</h4>
                                                            <p align="center">
                                                                <img src="assets/img/committees/unesco.jpeg" class="responsive-img materialboxed" alt="">
                                                            </p>
                                                            <p align="justify">UNESCO is the United Nations educational, scientific and cultural organization. It seeks to build peace through international cooperation in Education, the Sciences and
                                                                Culture. UNESCO&#39;s programmes contribute to the achievement of the Sustainable Development Goals defined in Agenda 2030, adopted by the UN General Assembly in 2015. UNESCO has a
                                                                unique role to play in strengthening the foundations of lasting peace and equitable and sustainable development. Advancing cooperation in education, the sciences, culture, communication
                                                                and information holds strategic stakes at a time when societies across the world face the rising pressures of change and the international community faces new challenges.</p>
                                                            <ul class="collapsible popout" data-collapsible="accordion">
                                                                <li>
                                                                    <div class="collapsible-header"><i class="material-icons">filter_list</i>Topic A: Protecting Cultural Heritage in Conflict Zones</div>
                                                                    <div class="collapsible-body">
                                                                        <a href="/assets/downloads/pdf/UNESCOTopicA.pdf" target="_blank" class="btn-flat"><i class="material-icons left">picture_as_pdf</i>Download</a>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="collapsible-header"><i class="material-icons">filter_list</i>Topic B: Reducing Child Mortality Rates in the Worst Affected Countries</div>
                                                                    <div class="collapsible-body">
                                                                        <a href="/assets/downloads/pdf/UNESCOTopicB.pdf" target="_blank" class="btn-flat"><i class="material-icons left">
                                                                                picture_as_pdf
                                                                            </i>Download</a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                            <div class="row center-align">
                                                                <div class="col s12 center-align">
                                                                    <div class="chip cyan white-text">
                                                                        7th
                                                                    </div>
                                                                    <div class="chip cyan white-text">
                                                                        8th
                                                                    </div>
                                                                    <div class="chip cyan white-text">
                                                                        9th
                                                                    </div>
                                                                    <div class="chip cyan white-text">
                                                                        10th
                                                                    </div>
                                                                    <div class="chip cyan white-text">
                                                                        11th
                                                                    </div>
                                                                    <div class="chip cyan white-text">
                                                                        12th
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <a href="#!" class="modal-action modal-close waves-effect waves-blue btn-flat">Close</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-action center-align">
                                        <a class="waves-effect waves-light modal-trigger blue-text" href="#modalUNESCO">Read more</a>
                                    </div>
                                </div>
                            </div>

                            <!-- United Nations Environment Programme -->
                            <div class="col s12 m8 offset-m2">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="row">
                                            <div class="col s12 m4">
                                                <p align="center">
                                                    <img src="assets/img/committees/unep.png" class="responsive-img materialboxed" alt="">
                                                </p>
                                            </div>
                                            <div class="col s12 m8">
                                                <h2 class="card-title center-align">UN Environment Programme</h2>
                                                <p align="justify">The United Nations Environment Programme (UNEP) is the most important environmental authority that sets the global environmental agenda. UNEP's mission is "to provide leadership and
                                                    encourage partnership in caring for the environment by inspiring, informing, and enabling nations and peoples to improve their quality of life without compromising that of future generations.” </p>
                                                <!-- Modal Structure -->
                                                <div id="modalUNEP" class="modal">
                                                    <div class="modal-content">
                                                        <div class="container">
                                                            <h4 class="center-align">UN Environment Programme</h4>
                                                            <p align="center">
                                                                <img src="assets/img/committees/unep.png" class="responsive-img materialboxed" alt="">
                                                            </p>
                                                            <p align="justify">The United Nations Environment Programme (UNEP) is the most important environmental authority that sets the global environmental agenda. UNEP's mission is "to provide
                                                                leadership and encourage partnership in caring for the environment by inspiring, informing, and enabling nations and peoples to improve their quality of life without compromising that
                                                                of future generations.” UNEP does this by developing regional programmes for environmental sustainability. It helps environment ministries and other environmental authorities, in
                                                                particular in developing countries and countries with economies in transition, to formulate and implement environmental policies. UNEP promotes international cooperation on
                                                                environmental issues, and it also provides a guide to UN organizations, and, through its scientific advisory groups, encourages the international scientific community to participate in
                                                                formulating policy for many of the UN’s environmental projects. This organization is focused on six thematic projects priorities, climate change, disasters and conflicts, sustainable
                                                                management of ecosystems, Environmental management, harmful substances and hazardous waste, and resource efficiency - sustainable production and consumption. Taking into account this
                                                                information, we can appreciate the importance of this United Nations committee.
                                                            </p>
                                                            <ul class="collapsible popout" data-collapsible="accordion">
                                                                <li>
                                                                    <div class="collapsible-header"><i class="material-icons">filter_list</i>Topic A: Renewable energy and future energy demand</div>
                                                                    <div class="collapsible-body">
                                                                        <a href="/assets/downloads/pdf/UNEPTopicA.pdf" target="_blank" class="btn-flat"><i class="material-icons left">picture_as_pdf</i>Download</a>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="collapsible-header"><i class="material-icons">filter_list</i>Topic B: Addressing the Challenges, Risks and Impacts of Extreme Weather Events (Spanish)</div>
                                                                    <div class="collapsible-body">
                                                                        <a href="/assets/downloads/pdf/UNEPTopicB.pdf" target="_blank" class="btn-flat"><i class="material-icons left">
                                                                                picture_as_pdf
                                                                            </i>Download</a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                            <div class="row center-align">
                                                                <div class="col s12 center-align">
                                                                    <div class="chip cyan white-text">
                                                                        6th
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <a href="#!" class="modal-action modal-close waves-effect waves-blue btn-flat">Close</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-action center-align">
                                        <a class="waves-effect waves-light modal-trigger blue-text" href="#modalUNEP">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </article>
            </div>
        </div>
    </section>
</div>
@endsection

@section('javascript')

@endsection
