@extends('layouts.base')
@section('container')
        <header data-parallax="50" class="ct-page-header ct-page-header--small">
            <svg viewBox="0 0 100 100" preserveAspectRatio="none" class="ct-page-header__svg">
                <path d="M0,100 L 100,100 100,0 Z"></path>
            </svg>
            <div class="ct-page-header__inner">
                <div class="container">
                    <h1 class="h1 ct-page-header__title">Book <b>Party</b></h1>
                </div>
            </div>
        </header>
        <!-- *** Main *** -->
        <main>
            <section class="ct-form-section">
                <h2 class="h4 ct-form-section__title">Feel free to phone us at   <a href="tel:0123456789">(012) 345 6789</a> to get started right away! Or use the form below:</h2>
                <form action="http://confetti.html.themeforest.createit.pl/assets/form/send.php" method="POST" data-email-subject="My Confetti" class="ct-form-section__form ct-js-validate">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" placeholder="Name" id="name" name="field[]" required="required" class="form-control" />
                                <label for="name" class="sr-only">Name</label>
                            </div>
                            <div class="form-group">
                                <input type="email" placeholder="Email" id="email" name="field[]" required="required" class="form-control" />
                                <label for="email" class="sr-only">Email</label>
                            </div>
                            <div class="form-group">
                                <input type="tel" placeholder="Phone" id="phone" name="field[]" required="required" class="form-control" />
                                <label for="phone" class="sr-only">Phone</label>
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Address" id="address" name="field[]" required="required" class="form-control" />
                                <label for="address" class="sr-only">Address</label>
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="City" id="city" name="field[]" required="required" class="form-control" />
                                <label for="city" class="sr-only">City</label>
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="State" id="state" name="field[]" required="required" class="form-control" />
                                <label for="state" class="sr-only">State</label>
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Zipcode" id="zipcode" name="field[]" required="required" class="form-control" />
                                <label for="zipcode" class="sr-only">Zipcode</label>
                            </div><span class="ct-form-section__header">Schedule Party For:</span>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select id="month" data-placeholder="Month" required="required" name="field[]" class="ct-select">
                                            <option disabled="disabled" selected="selected" hidden="hidden" value="">Month</option>
                                            <option value="January">January</option>
                                            <option value="February">February</option>
                                            <option value="March">March</option>
                                            <option value="April">April</option>
                                            <option value="May">May</option>
                                            <option value="June">June</option>
                                            <option value="July">July</option>
                                            <option value="August">August</option>
                                            <option value="September">September</option>
                                            <option value="October">October</option>
                                            <option value="Nobember">Nobember</option>
                                            <option value="December">December</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select id="day" data-placeholder="Day" required="required" name="field[]" class="ct-select">
                                            <option disabled="disabled" selected="selected" hidden="hidden" value="">Day</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                            <option value="31">31</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select id="time" data-placeholder="Time" required="required" name="field[]" class="ct-select">
                                            <option disabled="disabled" selected="selected" hidden="hidden" value="">Time</option>
                                            <option value="6:00 AM">6:00 AM</option>
                                            <option value="7:00 AM">7:00 AM</option>
                                            <option value="8:00 AM">8:00 AM</option>
                                            <option value="9:00 AM">9:00 AM</option>
                                            <option value="10:00 AM">10:00 AM</option>
                                            <option value="11:00 AM">11:00 AM</option>
                                            <option value="12:00 PM">12:00 PM</option>
                                            <option value="1:00 PM">1:00 PM</option>
                                            <option value="2:00 PM">2:00 PM</option>
                                            <option value="3:00 PM">3:00 PM</option>
                                            <option value="4:00 PM">4:00 PM</option>
                                            <option value="5:00 PM">5:00 PM</option>
                                            <option value="6:00 PM">6:00 PM</option>
                                            <option value="7:00 PM">7:00 PM</option>
                                            <option value="8:00 PM">8:00 PM</option>
                                            <option value="9:00 PM">9:00 PM</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="number" placeholder="Number of Children" id="number-of-children" name="field[]" required="required" class="form-control" />
                                <label for="number-of-children" class="sr-only">Number of Children</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" placeholder="Event Location" id="event-location" name="field[]" required="required" class="form-control" />
                                <label for="event-location" class="sr-only">Event Location</label>
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Event Theme" id="event-theme" name="field[]" required="required" class="form-control" />
                                <label for="event-theme" class="sr-only">Event Theme</label>
                            </div>
                            <div class="form-group">
                                <input type="number" placeholder="Number of Guests" id="number-of-guests" name="field[]" required="required" class="form-control" />
                                <label for="number-of-guests" class="sr-only">Number of Guests</label>
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Guests Age Range" id="guests-age-range" name="field[]" required="required" class="form-control" />
                                <label for="guests-age-range" class="sr-only">Guests Age Range</label>
                            </div><span class="ct-form-section__header">Event Budget</span>
                            <div class="ct-range-slider__wrapper">
                                <div data-range_min="1" data-range_max="9999" data-cur_min="850" data-cur_max="9999" class="ct-range-slider">
                                    <div class="ct-range-slider__bar"></div>
                                    <div class="ct-range-slider__left-grip ct-range-slider__grip">
                                        <input type="text" name="field[]" placeholder="Min Budget" readonly="readonly" class="ct-range-slider__left-label ct-range-slider__label" />
                                    </div>
                                    <div class="ct-range-slider__right-grip ct-range-slider__grip">
                                        <input type="text" name="field[]" placeholder="Max Budget" readonly="readonly" class="ct-range-slider__right-label ct-range-slider__label" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <select id="how-did-you-hear" data-placeholder="How did you hear about us?" required="required" name="field[]" class="ct-select">
                                    <option disabled="disabled" selected="selected" hidden="hidden" value="">How did you hear about us?</option>
                                    <option value="Internet">Internet</option>
                                    <option value="Friends">Friends</option>
                                    <option value="Family">Family</option>
                                    <option value="Newspaper">Newspaper</option>
                                </select>
                            </div><span class="ct-form-section__header">Planning Options (Check all that apply)</span>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="checkbox-group">
                                        <input type="checkbox" data-placeholder="Girlfriend Getaway" id="girlfriend-getaway" name="field[]" class="hidden" />
                                        <label for="girlfriend-getaway">Girlfriend Getaway</label>
                                    </div>
                                    <div class="checkbox-group">
                                        <input type="checkbox" data-placeholder="Spa Party" id="spa-party" name="field[]" class="hidden" />
                                        <label for="spa-party">Spa Party</label>
                                    </div>
                                    <div class="checkbox-group">
                                        <input type="checkbox" data-placeholder="Children's Party" id="childrens-party" name="field[]" class="hidden" />
                                        <label for="childrens-party">Children's Party</label>
                                    </div>
                                    <div class="checkbox-group">
                                        <input type="checkbox" data-placeholder="Baby Shower" id="baby-shower" name="field[]" class="hidden" />
                                        <label for="baby-shower">Baby Shower</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="checkbox-group">
                                        <input type="checkbox" data-placeholder="School Event" id="school-event" name="field[]" class="hidden" />
                                        <label for="school-event">School Event</label>
                                    </div>
                                    <div class="checkbox-group">
                                        <input type="checkbox" data-placeholder="Corporate Event" id="corporate-event" name="field[]" class="hidden" />
                                        <label for="corporate-event">Corporate Event</label>
                                    </div>
                                    <div class="checkbox-group">
                                        <input type="checkbox" data-placeholder="Social Event" id="social-event" name="field[]" class="hidden" />
                                        <label for="social-event">Social Event</label>
                                    </div>
                                    <div class="checkbox-group">
                                        <input type="checkbox" data-placeholder="Adult Birthday Party" id="adult-birthday-party" name="field[]" class="hidden" />
                                        <label for="adult-birthday-party">Adult Birthday Party</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="form-group">
                                <textarea placeholder="Questions or Comments" id="questions-or-comments" rows="8" required="required" name="field[]" class="form-control ct-u-margin-top-15"></textarea>
                                <label for="questions-or-comments" class="sr-only">Questions or Comments</label>
                            </div>
                            <button type="submit" class="btn btn-motive">Book Now
                            </button>
                            <div role="alert" class="successMessage alert alert-success alert-dismissible">
                                <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true">&times;</span>
                                </button>Your Email has been sent successfully.
                            </div>
                            <div role="alert" class="errorMessage alert alert-danger alert-dismissible">
                                <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true">&times;</span>
                                </button>Ups, something went wrong.
                            </div>
                        </div>
                    </div>
                </form>
            </section>
        </main>
        @stop