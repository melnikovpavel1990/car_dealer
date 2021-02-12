@extends('layouts.master')


@section('content')
    <div class="wrap">




        <!-- - - - - - - - - - - - - - Top Panel - - - - - - - - - - - - - - - - -->

        <div class="top-panel clearfix">

            <!-- - - - - - - - - - - Slider - - - - - - - - - - - - - -->

            <div id="slider" class="flexslider clearfix">

                <ul class="slides">

                    <li>
                        <img src="images/sliders/slide-1.jpg" alt="" />

                        <div class="caption">
                            <div class="caption-entry">

                                <dl class="auto-detailed clearfix">
                                    <dt><span class="model">2005 Shevrolet</span></dt>
                                    <dd class="media-hidden"><b>1.8 XRS Sedan</b></dd>
                                    <dd class="media-hidden"><b>36000 Miles</b></dd>
                                    <dd><span class="heading">$25896</span></dd>
                                </dl><!--/ .auto-detailed-->

                                <a href="#" class="button orange">Details &raquo;</a>

                            </div><!--/ .caption-entry-->
                        </div><!--/ .caption-->
                    </li>
                    <li>
                        <img src="images/sliders/slide-2.jpg" alt="" />

                        <div class="caption">
                            <div class="caption-entry">

                                <dl class="auto-detailed clearfix">
                                    <dt><span class="model">2012 BMW</span></dt>
                                    <dd class="media-hidden"><b>1.8 XRS Sedan</b></dd>
                                    <dd class="media-hidden"><b>36000 Miles</b></dd>
                                    <dd><span class="heading">$25896</span></dd>
                                </dl><!--/ .auto-detailed-->

                                <a href="#" class="button orange">Details &raquo;</a>

                            </div><!--/ .caption-entry-->
                        </div><!--/ .caption-->
                    </li>
                    <li>
                        <img src="images/sliders/slide-3.jpg" alt="" />

                        <div class="caption">
                            <div class="caption-entry">

                                <dl class="auto-detailed clearfix">
                                    <dt><span class="model">2010 Subaru</span></dt>
                                    <dd class="media-hidden"><b>1.8 XRS Sedan</b></dd>
                                    <dd class="media-hidden"><b>36000 Miles</b></dd>
                                    <dd><span class="heading">$25896</span></dd>
                                </dl><!--/ .auto-detailed-->

                                <a href="#" class="button orange">Details &raquo;</a>

                            </div><!--/ .caption-entry-->
                        </div><!--/ .caption-->
                    </li>
                    <li>
                        <img src="images/sliders/slide-4.jpg" alt="" />

                        <div class="caption">
                            <div class="caption-entry">

                                <dl class="auto-detailed clearfix">
                                    <dt><span class="model">2005 Honda</span></dt>
                                    <dd class="media-hidden"><b>1.8 XRS Sedan</b></dd>
                                    <dd class="media-hidden"><b>36000 Miles</b></dd>
                                    <dd><span class="heading">$25896</span></dd>
                                </dl><!--/ .auto-detailed-->

                                <a href="#" class="button orange">Details &raquo;</a>

                            </div><!--/ .caption-entry-->
                        </div><!--/ .caption-->
                    </li>
                    <li>
                        <img src="images/sliders/slide-5.jpg" alt="" />

                        <div class="caption">
                            <div class="caption-entry">

                                <dl class="auto-detailed clearfix">
                                    <dt><span class="model">2005 Honda</span></dt>
                                    <dd class="media-hidden"><b>1.8 XRS Sedan</b></dd>
                                    <dd class="media-hidden"><b>36000 Miles</b></dd>
                                    <dd><span class="heading">$25896</span></dd>
                                </dl><!--/ .auto-detailed-->

                                <a href="#" class="button orange">Details &raquo;</a>

                            </div><!--/ .caption-entry-->
                        </div><!--/ .caption-->
                    </li>

                </ul><!--/ .slides-->

            </div><!--/ #slider-->

            <!-- - - - - - - - - - - end Slider - - - - - - - - - - - - - -->

            <!-- - - - - - - - - - - Search Panel - - - - - - - - - - - - - -->

            <div class="widget_custom_search">

                <h3 class="widget-title">Quick Search</h3>

                <form action="http://html.webtemplatemasters.com/" id="boxpanel" class="form-panel">

                    <fieldset>
                        <label>Manufacturer:</label>
                        <select>
                            <option value="0">Any</option>
                            <option value="1">Lorem</option>
                            <option value="2">Ipsum</option>
                        </select>
                    </fieldset>

                    <fieldset>
                        <label>Min Price:</label>
                        <select>
                            <option value="0">No min</option>
                            <option value="1">Lorem</option>
                            <option value="2">Ipsum</option>
                        </select>
                    </fieldset>

                    <fieldset>
                        <label>Max Price:</label>
                        <select>
                            <option value="0">No max</option>
                            <option value="1">Lorem</option>
                            <option value="2">Ipsum</option>
                        </select>
                    </fieldset>

                    <fieldset>
                        <label>Trans:</label>
                        <select>
                            <option value="0">Any</option>
                            <option value="1">Lorem</option>
                            <option value="2">Ipsum</option>
                        </select>
                    </fieldset>

                    <fieldset>
                        <label>Mileage:</label>
                        <select>
                            <option value="0">Any</option>
                            <option value="1">Lorem</option>
                            <option value="2">Ipsum</option>
                        </select>
                    </fieldset>

                    <fieldset>
                        <label>Body Type:</label>
                        <select>
                            <option value="0">Any</option>
                            <option value="1">Lorem</option>
                            <option value="2">Ipsum</option>
                        </select>
                    </fieldset>

                    <div class="clear"></div>
                    <button id="submitSearch" class="submit-search" type="submit">Search</button>

                </form><!--/ .form-panel-->

            </div><!--/ .main-search-panel-->

            <!-- - - - - - - - - - end Search Panel - - - - - - - - - - - - -->

        </div><!--/ .top-panel-->

        <!-- - - - - - - - - - - - - end Top Panel - - - - - - - - - - - - - - - -->

        <div class="main">

            <!-- - - - - - - - - - - - - - - Container - - - - - - - - - - - - - - - - -->

            <section class="container sbr clearfix">

                <!-- - - - - - - - - - - - - - - Content - - - - - - - - - - - - - - - - -->

                <section id="content" class="two-thirds column">

                    <h3 class="widget-title">Recent Automobiles</h3>

                    <section id="change-items" class="item-grid">

                        <article>

                            <a href="one-products.html" class="single-image picture video">
                                <img src="images/temp/thumb-1.jpg" alt="">
                            </a>

                            <div class="detailed">

                                <h6 class="title-item">
                                    <a href="one-products.html">2009 Aston Martin DB9</a>
                                </h6>

                                <span class="price">$8.966</span>

                                <div class="clear"></div>

                                <ul class="list-entry">
                                    <li><b class="label">Engine:</b><span>1.4i TS 5Dr</span></li>
                                    <li><b class="label">Mileage:</b><span>75000</span></li>
                                    <li><b class="label">Year:</b><span>2009</span></li>
                                    <li><b class="label">Location:</b><span>New Jersey/ Newark</span></li>
                                </ul><!--/ .list-entry-->

                                <label class="compare"><input type="checkbox" />Compare</label>
                                <a href="one-products.html" class="button orange">Details</a>

                            </div><!--/ .detailed-->

                        </article>

                        <article>

                            <a href="one-products.html" class="single-image picture">
                                <img src="images/temp/thumb-2.jpg" alt="">
                            </a>

                            <div class="detailed">

                                <h6 class="title-item">
                                    <a href="one-products.html">2009 Aston Martin DB9</a>
                                </h6>

                                <span class="price">$8.966</span>

                                <div class="clear"></div>

                                <ul class="list-entry">
                                    <li><b class="label">Engine:</b><span>1.4i TS 5Dr</span></li>
                                    <li><b class="label">Mileage:</b><span>75000</span></li>
                                    <li><b class="label">Year:</b><span>2009</span></li>
                                    <li><b class="label">Location:</b><span>New Jersey/ Newark</span></li>
                                </ul><!--/ .list-entry-->

                                <label class="compare"><input type="checkbox" />Compare</label>
                                <a href="one-products.html" class="button orange">Details</a>

                            </div><!--/ .detailed-->

                        </article>

                        <article>

                            <a href="one-products.html" class="single-image picture video">
                                <img src="images/temp/thumb-3.jpg" alt="">
                            </a>

                            <div class="detailed">

                                <h6 class="title-item">
                                    <a href="one-products.html">2009 Aston Martin DB9</a>
                                </h6>

                                <span class="price">$8.966</span>

                                <div class="clear"></div>

                                <ul class="list-entry">
                                    <li><b class="label">Engine:</b><span>1.4i TS 5Dr</span></li>
                                    <li><b class="label">Mileage:</b><span>75000</span></li>
                                    <li><b class="label">Year:</b><span>2009</span></li>
                                    <li><b class="label">Location:</b><span>New Jersey/ Newark</span></li>
                                </ul><!--/ .list-entry-->

                                <label class="compare"><input type="checkbox" />Compare</label>
                                <a href="one-products.html" class="button orange">Details</a>

                            </div><!--/ .detailed-->

                        </article>

                        <article>

                            <a href="one-products.html" class="single-image picture">
                                <img src="images/temp/thumb-3.jpg" alt="">
                            </a>

                            <div class="detailed">

                                <h6 class="title-item">
                                    <a href="one-products.html">2009 Aston Martin DB9</a>
                                </h6>

                                <span class="price">$8.966</span>

                                <div class="clear"></div>

                                <ul class="list-entry">
                                    <li><b class="label">Engine:</b><span>1.4i TS 5Dr</span></li>
                                    <li><b class="label">Mileage:</b><span>75000</span></li>
                                    <li><b class="label">Year:</b><span>2009</span></li>
                                    <li><b class="label">Location:</b><span>New Jersey/ Newark</span></li>
                                </ul><!--/ .list-entry-->

                                <label class="compare"><input type="checkbox" />Compare</label>
                                <a href="one-products.html" class="button orange">Details</a>

                            </div><!--/ .detailed-->

                        </article>

                        <article>

                            <a href="one-products.html" class="single-image picture video">
                                <img src="images/temp/no-thumb.jpg" alt="">
                            </a>

                            <div class="detailed">

                                <h6 class="title-item">
                                    <a href="one-products.html">2009 Aston Martin DB9</a>
                                </h6>

                                <span class="price">$8.966</span>

                                <div class="clear"></div>

                                <ul class="list-entry">
                                    <li><b class="label">Engine:</b><span>1.4i TS 5Dr</span></li>
                                    <li><b class="label">Mileage:</b><span>75000</span></li>
                                    <li><b class="label">Year:</b><span>2009</span></li>
                                    <li><b class="label">Location:</b><span>New Jersey/ Newark</span></li>
                                </ul><!--/ .list-entry-->

                                <label class="compare"><input type="checkbox" />Compare</label>
                                <a href="one-products.html" class="button orange">Details</a>

                            </div><!--/ .detailed-->

                        </article>

                        <article>

                            <a href="one-products.html" class="single-image picture">
                                <img src="images/temp/thumb-4.jpg" alt="">
                            </a>

                            <div class="detailed">

                                <h6 class="title-item">
                                    <a href="one-products.html">2009 Aston Martin DB9</a>
                                </h6>

                                <span class="price">$8.966</span>

                                <div class="clear"></div>

                                <ul class="list-entry">
                                    <li><b class="label">Engine:</b><span>1.4i TS 5Dr</span></li>
                                    <li><b class="label">Mileage:</b><span>75000</span></li>
                                    <li><b class="label">Year:</b><span>2009</span></li>
                                    <li><b class="label">Location:</b><span>New Jersey/ Newark</span></li>
                                </ul><!--/ .list-entry-->

                                <label class="compare"><input type="checkbox" />Compare</label>
                                <a href="one-products.html" class="button orange">Details</a>

                            </div><!--/ .detailed-->

                        </article>

                        <article>

                            <a href="one-products.html" class="single-image picture video">
                                <img src="images/temp/no-thumb.jpg" alt="">
                            </a>

                            <div class="detailed">

                                <h6 class="title-item">
                                    <a href="one-products.html">2009 Aston Martin DB9</a>
                                </h6>

                                <span class="price">$8.966</span>

                                <div class="clear"></div>

                                <ul class="list-entry">
                                    <li><b class="label">Engine:</b><span>1.4i TS 5Dr</span></li>
                                    <li><b class="label">Mileage:</b><span>75000</span></li>
                                    <li><b class="label">Year:</b><span>2009</span></li>
                                    <li><b class="label">Location:</b><span>New Jersey/ Newark</span></li>
                                </ul><!--/ .list-entry-->

                                <label class="compare"><input type="checkbox" />Compare</label>
                                <a href="one-products.html" class="button orange">Details</a>

                            </div><!--/ .detailed-->

                        </article>

                        <article>

                            <a href="one-products.html" class="single-image picture">
                                <img src="images/temp/thumb-5.jpg" alt="">
                            </a>

                            <div class="detailed">

                                <h6 class="title-item">
                                    <a href="one-products.html">2009 Aston Martin DB9</a>
                                </h6>

                                <span class="price">$8.966</span>

                                <div class="clear"></div>

                                <ul class="list-entry">
                                    <li><b class="label">Engine:</b><span>1.4i TS 5Dr</span></li>
                                    <li><b class="label">Mileage:</b><span>75000</span></li>
                                    <li><b class="label">Year:</b><span>2009</span></li>
                                    <li><b class="label">Location:</b><span>New Jersey/ Newark</span></li>
                                </ul><!--/ .list-entry-->

                                <label class="compare"><input type="checkbox" />Compare</label>
                                <a href="one-products.html" class="button orange">Details</a>

                            </div><!--/ .detailed-->

                        </article>

                        <article>

                            <a href="one-products.html" class="single-image picture video">
                                <img src="/images/temp/thumb-4.jpg" alt="">
                            </a>

                            <div class="detailed">

                                <h6 class="title-item">
                                    <a href="one-products.html">2009 Aston Martin DB9</a>
                                </h6>

                                <span class="price">$8.966</span>

                                <div class="clear"></div>

                                <ul class="list-entry">
                                    <li><b class="label">Engine:</b><span>1.4i TS 5Dr</span></li>
                                    <li><b class="label">Mileage:</b><span>75000</span></li>
                                    <li><b class="label">Year:</b><span>2009</span></li>
                                    <li><b class="label">Location:</b><span>New Jersey/ Newark</span></li>
                                </ul><!--/ .list-entry-->

                                <label class="compare"><input type="checkbox" />Compare</label>
                                <a href="one-products.html" class="button orange">Details</a>

                            </div><!--/ .detailed-->

                        </article>

                        <a href="#" class="see">See all automobiles</a>

                    </section><!--/ .item-grid-->

                </section><!--/ #content-->

                <!-- - - - - - - - - - - - - - end Content - - - - - - - - - - - - - - - - -->


                <!-- - - - - - - - - - - - - - - Sidebar - - - - - - - - - - - - - - - - -->

                <aside id="sidebar" class="one-third column">

                    <div class="widget-container widget_loan_calculator">

                        <div class="widget-head">
                            <h3 class="widget-title">Loan Calculator</h3>
                        </div>

                        <div class="entry-loan">

                            <form action="#" method="POST" name="myform" id="loan">

                                <table>
                                    <tr>
                                        <td><label for="LoanAmount">Car Loan Amount</label></td>
                                        <td><input name="LoanAmount" id="LoanAmount" type="text" value="3000" /></td>
                                        <td>$</td>
                                    </tr>
                                    <tr>
                                        <td><label for="InterestRate">Annual Interest Rate</label></td>
                                        <td><input name="InterestRate" id="InterestRate" type="text" value="7.0" /></td>
                                        <td>%</td>
                                    </tr>
                                    <tr>
                                        <td><label for="NumberOfYears">Term of Car Loan</label></td>
                                        <td><input name="NumberOfYears" id="NumberOfYears" type="text" value="4" /></td>
                                        <td>Years</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <button name="cal" class="button orange">Calculate</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label for="NumberOfPayments">Number of Car Payments</label></td>
                                        <td><input readonly="readonly" type="text" id="NumberOfPayments" name="NumberOfPayments" /></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><label for="MonthlyPayment">Monthly Payment</label></td>
                                        <td><input readonly="readonly" type="text" id="MonthlyPayment" name="MonthlyPayment" /></td>
                                        <td>$</td>
                                    </tr>
                                </table>

                            </form>

                        </div><!--/ .entry-loan-->

                    </div><!--/ .widget-container-->

                    <div class="widget-container widget_recent_entries">

                        <h3 class="widget-title">Recent News</h3>

                        <ul>
                            <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing</a></li>
                            <li><a href="#">Ipsum dolor sit amet, consectetur adipisicing</a></li>
                            <li><a href="#">Set magna ipsum dolor sit amet, consectetur adipisicing</a></li>
                        </ul>

                        <a href="#" class="see">See all news</a>

                    </div><!--/ .widget-container-->

                </aside><!--/ #sidebar-->

                <!-- - - - - - - - - - - - - end Sidebar - - - - - - - - - - - - - - - - -->

            </section><!--/.container -->

            <!-- - - - - - - - - - - - - end Container - - - - - - - - - - - - - - - - -->

        </div><!--/ .main-->




    </div><!--/ .wrap-->

@endsection
