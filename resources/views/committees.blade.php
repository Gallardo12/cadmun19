@extends('layouts.pages')

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
                                                                    <div class="collapsible-header"><i class="material-icons">filter_list</i>Topic A: Regulating artificial inteligence development and potential weaponization.</div>
                                                                    <div class="collapsible-body">
                                                                        <a href="/assets/downloads/pdf/ga-pp-A.pdf" target="_blank" class="btn-flat"><i class="material-icons left">picture_as_pdf</i>Download</a>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="collapsible-header"><i class="material-icons">filter_list</i>Topic B: Addressing the situation in the Middle East regarding the Palestinian Conflict.</div>
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
                                                                    <div class="collapsible-header"><i class="material-icons">filter_list</i>Topic A: Addressing GUAM area (Georgia, Ukraine, Azerbaijan, and Moldova) security.</div>
                                                                    <div class="collapsible-body">
                                                                        <a href="/assets/downloads/pdf/sc-pp-A.pdf" target="_blank" class="btn-flat"><i class="material-icons left">
                                                                                picture_as_pdf
                                                                            </i>Download</a>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="collapsible-header"><i class="material-icons">filter_list</i>Topic B: Crisis.</div>
                                                                    <!--div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div-->
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
                            <div class="col s12 m8 offset-m2">
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
                                                <p align="justify">UNODA committee fosters disarmament measures through dialogue, transparency and confidence-building surrounding military matters, and encourages regional disarmament efforts. </p>
                                                <!-- Modal Structure -->
                                                <div id="modalUNODA" class="modal">
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
                            </div>

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
                                                    the central platform
                                                    for fostering debate and innovative thinking, forging consensus on ways forward, and coordinating efforts to achieve internationally agreed goals. </p>
                                                <!-- Modal Structure -->
                                                <div id="modalECOSOC" class="modal">
                                                    <div class="modal-content">
                                                        <div class="container">
                                                            <h4 class="center-align">Economic and Social Council</h4>
                                                            <p align="center">
                                                                <img src="assets/img/committees/ecosoc.png" class="responsive-img materialboxed" alt="">
                                                            </p>
                                                            <p align="justify">The Economic and Social Council is at the heart of the United Nations system to advance the three dimensions of sustainable development – economic, social and
                                                                environmental. It is the central platform
                                                                for fostering debate and innovative thinking, forging consensus on ways forward, and coordinating efforts to achieve internationally agreed goals. It is also responsible for the
                                                                follow-up to major UN conferences and
                                                                summits. The UN Charter established ECOSOC in 1945 as one of the six main organs of the United Nations. ECOSOC links a diverse family of UN entities (Organigram) dedicated to
                                                                sustainable development, providing overall
                                                                guidance and coordination. The entities include regional economic and social commissions, functional commissions facilitating intergovernmental discussions of major global issues, and
                                                                specialized agencies, programmes
                                                                and funds at work around the world to translate development commitments into real changes in people’s lives.</p>
                                                            <ul class="collapsible popout" data-collapsible="accordion">
                                                                <li>
                                                                    <div class="collapsible-header"><i class="material-icons">filter_list</i>Topic A: Automation of labor and protecting rights of workers.</div>
                                                                    <div class="collapsible-body">
                                                                        <a href="/assets/downloads/pdf/ecosoc-pp-A.pdf" target="_blank" class="btn-flat"><i class="material-icons left">picture_as_pdf</i>Download</a>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="collapsible-header"><i class="material-icons">filter_list</i>Topic B: Importing and exporting of oil from Venezuela and its effects on neighboring countries and its
                                                                        trading partners.</div>
                                                                    <div class="collapsible-body">
                                                                        <a href="/assets/downloads/pdf/ecosoc-pp-B.pdf" target="_blank" class="btn-flat"><i class="material-icons left">
                                                                                picture_as_pdf
                                                                            </i>Download</a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                            <div class="row center-align">
                                                                <div class="col s12 center-align">
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
                                                    side with governments
                                                    and other partners to ensure the highest attainable level of health for all people. </p>
                                                <!-- Modal Structure -->
                                                <div id="modalWHO" class="modal">
                                                    <div class="modal-content">
                                                        <div class="container">
                                                            <h4 class="center-align">World Health Organization</h4>
                                                            <p align="center">
                                                                <img src="assets/img/committees/who1.jpg" class="responsive-img materialboxed" alt="">
                                                            </p>
                                                            <p align="justify">The World Health Organization's goal is to build a better, healthier future for people all over the world. Working through offices in more than 150 countries, WHO staff
                                                                work side by side with
                                                                governments and other partners to ensure the highest attainable level of health for all people.</p>
                                                            <ul class="collapsible popout" data-collapsible="accordion">
                                                                <li>
                                                                    <div class="collapsible-header"><i class="material-icons">filter_list</i>Topic A: Reducing the sale of counterfeit drugs.</div>
                                                                    <div class="collapsible-body">
                                                                        <a href="/assets/downloads/pdf/ecosoc-pp-A.pdf" target="_blank" class="btn-flat"><i class="material-icons left">picture_as_pdf</i>Download</a>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="collapsible-header"><i class="material-icons">filter_list</i>Topic B: Combating the global obesity epidemic.</div>
                                                                    <div class="collapsible-body">
                                                                        <a href="/assets/downloads/pdf/ecosoc-pp-B.pdf" target="_blank" class="btn-flat"><i class="material-icons left">
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
                                                <p align="justify">This committee prioritizes strengthening international human rights mechanisms; enhancing equality and countering discrimination; combating impunity and strengthening accountability
                                                    and the rule of law;
                                                    integrating human rights in development and in the economic sphere; widening the democratic space; and early warning and protection of human rights in situations of conflict, violence and
                                                    insecurity. </p>
                                                <!-- Modal Structure -->
                                                <div id="modalHR" class="modal">
                                                    <div class="modal-content">
                                                        <div class="container">
                                                            <h4 class="center-align">Human Rights</h4>
                                                            <p align="center">
                                                                <img src="assets/img/committees/humanrights.png" class="responsive-img materialboxed" alt="">
                                                            </p>
                                                            <p align="justify">The Human Rights Committee is the body of independent experts that monitors implementation of the International Covenant on Civil and Political Rights by its State
                                                                parties. All States parties are
                                                                obliged to submit regular reports to the Committee on how the rights are being implemented. States must report initially one year after acceding to the Covenant and then whenever the
                                                                Committee requests (usually every
                                                                four years). The Committee examines each report and addresses its concerns and recommendations to the State party in the form of "concluding observations”.</p>
                                                            <ul class="collapsible popout" data-collapsible="accordion">
                                                                <li>
                                                                    <div class="collapsible-header"><i class="material-icons">filter_list</i>Topic A: Addressing LGBT persecution within Chechnya.</div>
                                                                    <div class="collapsible-body">
                                                                        <a href="/assets/downloads/pdf/hr-pp-A.pdf" target="_blank" class="btn-flat"><i class="material-icons left">picture_as_pdf</i>Download</a>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="collapsible-header"><i class="material-icons">filter_list</i>Topic B: Addressing religious repression in Central Asia.</div>
                                                                    <div class="collapsible-body">
                                                                        <a href="/assets/downloads/pdf/hr-pp-B.pdf" target="_blank" class="btn-flat"><i class="material-icons left">
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

                            <!-- United Nations Office on Drugs and Crime -->
                            <div class="col s12 m8 offset-m2">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="row">
                                            <div class="col s12 m4">
                                                <p align="center">
                                                    <img src="assets/img/committees/unodc.png" class="responsive-img materialboxed" alt="">
                                                </p>
                                            </div>
                                            <div class="col s12 m8">
                                                <h2 class="card-title center-align">United Nations Office on Drugs and Crime</h2>
                                                <p align="justify">UNODC is a global leader in the fight against illicit drugs and international crime. UNODC is mandated to assist member states in their struggle against illicit drugs, crime and
                                                    terrorism. </p>
                                                <!-- Modal Structure -->
                                                <div id="modalUNODC" class="modal">
                                                    <div class="modal-content">
                                                        <div class="container">
                                                            <h4 class="center-align">United Nations Office on Drugs and Crime</h4>
                                                            <p align="center">
                                                                <img src="assets/img/committees/unodc.png" class="responsive-img materialboxed" alt="">
                                                            </p>
                                                            <p align="justify">UNODC is a global leader in the fight against illicit drugs and international crime. Established in 1997 through a merger between the United Nations Drug Control
                                                                Programme and the Centre for
                                                                International Crime Prevention, UNODC operates in all regions of the world through an extensive network of field offices. UNODC relies on voluntary contributions, mainly from
                                                                Governments, for 90 per cent of its
                                                                budget.
                                                                UNODC is mandated to assist Member States in their struggle against illicit drugs, crime and terrorism. In the Millennium Declaration, Member States also resolved to intensify efforts
                                                                to fight transnational crime in
                                                                all
                                                                its dimensions, to redouble the efforts to implement the commitment to counter the world drug problem and to take concerted action against international terrorism.</p>
                                                            <ul class="collapsible popout" data-collapsible="accordion">
                                                                <li>
                                                                    <div class="collapsible-header"><i class="material-icons">filter_list</i>Topic A: Combating human trafficking and migrant smuggling.</div>
                                                                    <div class="collapsible-body">
                                                                        <a href="/assets/downloads/pdf/unodc-pp-A.pdf" target="_blank" class="btn-flat"><i class="material-icons left">picture_as_pdf</i>Download</a>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="collapsible-header"><i class="material-icons">filter_list</i>Topic B: Combating global black market arms trade weapon sales.</div>
                                                                    <div class="collapsible-body">
                                                                        <a href="/assets/downloads/pdf/unodc-pp-B.pdf" target="_blank" class="btn-flat"><i class="material-icons left">
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
                                                    progress of meeting their
                                                    needs worldwide. UN Women supports Member States as they set global standards for achieving gender equality, and works with governments and civil society to design laws, policies, programmes and
                                                    services needed to ensure
                                                    that the standards are effectively implemented and truly benefit women and girls worldwide. </p>
                                                <!-- Modal Structure -->
                                                <div id="modalUNWOMEN" class="modal">
                                                    <div class="modal-content">
                                                        <div class="container">
                                                            <h4 class="center-align">United Nations Entity for Gender Equality and the Empowerment of Women</h4>
                                                            <p align="center">
                                                                <img src="assets/img/committees/unwomen.png" class="responsive-img materialboxed" alt="">
                                                            </p>
                                                            <p align="justify">UN Women is the United Nations entity dedicated to gender equality and the empowerment of women. A global champion for women and girls, UN Women was established to
                                                                accelerate progress on meeting their
                                                                needs worldwide. UN Women supports UN Member States as they set global standards for achieving gender equality, and works with governments and civil society to design laws, policies,
                                                                programmes and services needed to
                                                                ensure that the standards are effectively implemented and truly benefit women and girls worldwide. It works globally to make the vision of the Sustainable Development Goals a reality
                                                                for women and girls and stands
                                                                behind women’s equal participation in all aspects of life, focusing on four strategic priorities:
                                                                <ul class="collection">
                                                                    <li class="collection-item">Women lead, participate in and benefit equally from governance systems</li>
                                                                    <li class="collection-item">Women have income security, decent work and economic autonomy</li>
                                                                    <li class="collection-item">All women and girls live a life free from all forms of violence</li>
                                                                    <li class="collection-item">Women and girls contribute to and have greater influence in building sustainable peace and resilience, and benefit equally from the prevention of natural
                                                                        disasters and conflicts and
                                                                        humanitarian action</li>
                                                                </ul>
                                                            </p>
                                                            <ul class="collapsible popout" data-collapsible="accordion">
                                                                <li>
                                                                    <div class="collapsible-header"><i class="material-icons">filter_list</i>Topic A: Combating institutional discrimination against women.</div>
                                                                    <div class="collapsible-body">
                                                                        <a href="/assets/downloads/pdf/unodc-pp-A.pdf" target="_blank" class="btn-flat"><i class="material-icons left">picture_as_pdf</i>Download</a>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="collapsible-header"><i class="material-icons">filter_list</i>Topic B: Growing economic development for women.</div>
                                                                    <div class="collapsible-body">
                                                                        <a href="/assets/downloads/pdf/unodc-pp-B.pdf" target="_blank" class="btn-flat"><i class="material-icons left">
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
                                                    mobilizes the wider public so
                                                    that each child and citizen has access to a quality education; a basic human right and an indispensable prerequisite for sustainable development. </p>
                                                <!-- Modal Structure -->
                                                <div id="modalUNESCO" class="modal">
                                                    <div class="modal-content">
                                                        <div class="container">
                                                            <h4 class="center-align">United Nations Educational, Scientific and Cultural Organization</h4>
                                                            <p align="center">
                                                                <img src="assets/img/committees/unesco.jpeg" class="responsive-img materialboxed" alt="">
                                                            </p>
                                                            <p align="justify">UNESCO is the United Nations Educational, Scientific and Cultural Organization. It seeks to build peace through international cooperation in Education, the Sciences and
                                                                Culture. UNESCO's programmes
                                                                contribute to the achievement of the Sustainable Development Goals defined in Agenda 2030, adopted by the UN General Assembly in 2015. UNESCO has a unique role to play in strengthening
                                                                the foundations of lasting peace
                                                                and equitable and sustainable development. Advancing cooperation in education, the sciences, culture, communication and information holds strategic stakes at a time when societies
                                                                across the world face the rising
                                                                pressures of change and the international community faces new challenges. The document 37 C/4 (2014-2021) approved by the UNESCO General Conference defines a common strategic vision for
                                                                the Organization for the next
                                                                eight years and the century ahead. The strategic orientations laid out in the 37 C/4 document are translated into a programme and budget document, document 39 C/5 (2018-2019), covering
                                                                a four year cycle, while the
                                                                budget allocation to the programmes will be appropriated biennially.</p>
                                                            <ul class="collapsible popout" data-collapsible="accordion">
                                                                <li>
                                                                    <div class="collapsible-header"><i class="material-icons">filter_list</i>Topic A: Genetic engineering and its role in global society.</div>
                                                                    <div class="collapsible-body">
                                                                        <a href="/assets/downloads/pdf/unesco-pp-A.pdf" target="_blank" class="btn-flat"><i class="material-icons left">picture_as_pdf</i>Download</a>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="collapsible-header"><i class="material-icons">filter_list</i>Topic B: Discussing the future of embryonic stem cell research.</div>
                                                                    <div class="collapsible-body">
                                                                        <a href="/assets/downloads/pdf/unesco-pp-B.pdf" target="_blank" class="btn-flat"><i class="material-icons left">
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
                                                <h2 class="card-title center-align">United Nations Environment Programmen</h2>
                                                <p align="justify">The United Nations Environment Programme is the leading global environmental authority that sets the global environmental agenda, promotes coherent implementation of the
                                                    environmental dimension of
                                                    sustainable development within the United Nations system, and serves as an authoritative advocate for the global environment. </p>
                                                <!-- Modal Structure -->
                                                <div id="modalUNEP" class="modal">
                                                    <div class="modal-content">
                                                        <div class="container">
                                                            <h4 class="center-align">United Nations Environment Programmen</h4>
                                                            <p align="center">
                                                                <img src="assets/img/committees/unep.png" class="responsive-img materialboxed" alt="">
                                                            </p>
                                                            <p align="justify">The United Nations Environment Programme (UN Environment) is the leading global environmental authority that sets the global environmental agenda, promotes the coherent
                                                                implementation of the
                                                                environmental dimension of sustainable development within the United Nations system, and serves as an authoritative advocate for the global environment. Headquartered in Nairobi, Kenya,
                                                                we work through our divisions
                                                                as
                                                                well as our regional, liaison and out-posted offices and a growing network of collaborating centres of excellence. We also host several environmental conventions, secretariats and
                                                                inter-agency coordinating bodies. UN
                                                                Environment is led by our Executive Director Erik Solheim and Deputy Executive Director. Their mission is to provide leadership and encourage partnership in caring for the environment
                                                                by inspiring, informing, and
                                                                enabling nations and peoples to improve their quality of life without compromising that of future generations.</p>
                                                            <ul class="collapsible popout" data-collapsible="accordion">
                                                                <li>
                                                                    <div class="collapsible-header"><i class="material-icons">filter_list</i>Topic A: Combating climate change.</div>
                                                                    <div class="collapsible-body">
                                                                        <a href="/assets/downloads/pdf/unep-pp-A.pdf" target="_blank" class="btn-flat"><i class="material-icons left">picture_as_pdf</i>Download</a>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="collapsible-header"><i class="material-icons">filter_list</i>Topic B: Promoting alternative energy.</div>
                                                                    <div class="collapsible-body">
                                                                        <a href="/assets/downloads/pdf/unep-pp-B.pdf" target="_blank" class="btn-flat"><i class="material-icons left">
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