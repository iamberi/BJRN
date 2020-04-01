@extends('layouts.frontend')

@section('content')



<section class="module" id="contact">
          <div class="container">
            <div class="widget">
                <ul class="icon-list">
                <li><a href="{{ url()->previous() }}">Zurück zum Artikel</a></li>
                </ul>
            </div>
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">Diesen Artikel anfragen</h2>
                <div class="module-subtitle font-serif"></div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <form id="contactForm" role="form" method="post" action="php/contact.php">
                  <div class="form-group">
                    <label class="sr-only" for="name">Name</label>
                    <input class="form-control" type="text" id="name" name="name" placeholder="Name*" required="required" data-validation-required-message="Bitte gebe deinen Namen an."/>
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <label class="sr-only" for="email">Email</label>
                    <input class="form-control" type="email" id="email" name="email" placeholder="Email*" required="required" data-validation-required-message="Bitte gebe deine Email-Adresse an."/>
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" rows="7" id="message" name="message" placeholder="Nachricht*" required="required" data-validation-required-message="Bitte trage eine Nachricht für den Empfänger ein."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>


                  <div class="text-center">
                    <button class="btn btn-block btn-round btn-d" id="cfsubmit" type="submit">Anfragen</button>
                  </div>
                </form>
                <div class="ajax-response font-alt" id="contactFormResponse"></div>
              </div>
            </div>
          </div>
        </section>

@endsection