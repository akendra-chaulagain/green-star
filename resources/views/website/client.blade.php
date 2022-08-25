 @extends('layouts.master')

 @section('content')
     <section class="page-title"
         style="background-image:   linear-gradient(
                                  rgba(27, 40, 92, 0.7),
                                  rgba(28, 35, 61, 0.7)
                                ) ,url(website/images/client/clientTop.webp)">
         <div class="auto-container">
             <div class="title-box">
                 <h1>Our Valuable Clients</h1>
             </div>
             <ul class="page-breadcrumb">
                 <li><a href="index-2.html">Home</a></li>
                 <li>Client</li>
             </ul>
         </div>
     </section>
     <!--End Page Title-->

     <!-- Projects Section -->
     <div class="about-compnay section-spacing">
         <div class="container">
             <div class="row">
                 <div class=" col-lg-12 col-12 text order-lg-last ">
                     <div class="theme-title-one mb-20">
                         <h2>Clients</h2>
                     </div> <!-- /.theme-title-one -->
                     <p class="mb-20">
                     {{-- <div class="row">
                         <div class="col-lg-4 col-md-6 col-sm-6">
                             <div class="clients-list">
                                 <h5>Kingdom Of Bahrain</h5>

                                 <ul>
                                     <li>Altrade Group</li>
                                     <li>Nass Scafform Contracting WLL</li>
                                     <li>Hertel WLL</li>
                                     <li>EBRAHIMK . KANOO</li>
                                     <li>The Kingdom Group</li>
                                     <li>Shaheen Group</li>
                                     <li>Jawad Business Group</li>
                                     <li>Kooheji Contractors WLL</li>
                                     <li>The Nass Group</li>
                                     <li>Arcal WLL</li>
                                     <li>Haji Hassan Group</li>
                                     <li>Cebarco WCT WLL</li>
                                     <li>Al Jazeera Sweets &amp; Pickle Factory</li>
                                     <li>Gamuda Berhad</li>
                                     <li>The Sultan Center</li>
                                     <li>AhamadMansoor Al Ali Co WLL</li>
                                     <li>Yum Yum Tree Food Court</li>
                                     <li>BBGM Bahrain Food and Leisure Co</li>
                                     <li>Mercure Grand Hotel</li>
                                     <li>Jassim Trading &amp;Agroserve</li>
                                     <li>Arabian Sugar Company B.S.C</li>
                                     <li>Air Tech WLL</li>
                                     <li>SecuriCORE Security WLL</li>
                                     <li>Alashoor Express Cargo</li>
                                     <li>Jalal Al A’Ali&amp; Sons CO.B.S.C</li>
                                 </ul>
                             </div>
                         </div>

                         <div class="col-lg-4 col-md-6 col-sm-6">
                             <div class="clients-list">
                                 <h5>Malaysia</h5>

                                 <ul>
                                     <li>Kelly Fresh Food Manufacturing SDN.BHD.</li>
                                     <li>Inari SDN.BHD</li>
                                     <li>Salad Boutique Restaurant</li>
                                 </ul>
                             </div>

                             <div class="clients-list">
                                 <h5>Kuwait</h5>

                                 <ul>
                                     <li>EissaEquipments</li>
                                     <li>Flex Resort &amp; Real Estate</li>
                                     <li>Jawad Business Group</li>
                                     <li>Kuwaiti American Food Stuff. (Kafco)</li>
                                     <li>The Sultan Center</li>
                                 </ul>
                             </div>

                             <div class="clients-list">
                                 <h5>Qatar</h5>

                                 <ul>
                                     <li>GroupAltrad</li>
                                     <li>Nass Scafform Contracting WLL</li>
                                     <li>Hertel WLL</li>
                                     <li>Al Arab Trading &amp; Contracting Co. WLL</li>
                                     <li>Jawad business Group</li>
                                     <li>The Maintainers</li>
                                     <li>Al Attiyah Architectural Group</li>
                                     <li>Jamco Trading &amp; Contracting Co</li>
                                     <li>Movenpick Hotel</li>
                                     <li>Abdulla Nass Group</li>
                                     <li>Noor Engineering Group WLL</li>
                                 </ul>
                             </div>
                         </div>

                         <div class="col-lg-4 col-md-6 col-sm-6">
                             <div class="clients-list">
                                 <h5>United Arab Emirates (UAE)</h5>

                                 <ul>
                                     <li>Altrade Group</li>
                                     <li>Nass Scafform Services WILL</li>
                                     <li>Hertel WLL</li>
                                     <li>Jawad Business Group – Restaurant</li>
                                     <li>Fashion, Logistics Divisions</li>
                                     <li>Nass Scafform Services</li>
                                 </ul>
                             </div>

                             <div class="clients-list">
                                 <h5>Oman</h5>

                                 <ul>
                                     <li>Jawad Business Group – Restaurant, Fashion Division</li>
                                     <li>The Sultan Centre</li>
                                     <li>Oryx Metal Industries LLC</li>
                                 </ul>
                             </div>

                             <div class="clients-list">
                                 <h5>Kingdom of Saudi Arabia</h5>

                                 <ul>
                                     <li>Jawad Business Group – Sarroof International</li>
                                     <li>Elaf Group of Hotel</li>
                                     <li>ALQawaa Business group</li>
                                 </ul>
                             </div>
                         </div>
                     </div> --}}
                     </p>
                 </div> 
             </div> 
         </div> 
     </div> 
 @endsection
