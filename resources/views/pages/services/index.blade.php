@extends('layouts/app')
@section('content')
    <section id="services">
      <div class="header" style="margin-top: 10px; margin-bottom:10px">
          <h2>Nos services</h2>
          <p></p>
      </div>
      <div class="row1-container">
        <div class="box box-down cyan">
          <h2>Orientation</h2>
          <p>Un test d'orientation par filière en fonction des séries </p>
          <img src="https://assets.codepen.io/2301174/icon-supervisor.svg" alt="">
        </div>
    
        <div class="box red">
          <h2>Forum</h2>
          <p>Un forum pour poste, c'est différente préoccupation</p>
          <img src="https://assets.codepen.io/2301174/icon-team-builder.svg" alt="">
        </div>
    
        <div class="box box-down blue">
          <h2>Universités</h2>
          <p>Liste des différentes universités et leurs programmes</p>
          <img src="https://assets.codepen.io/2301174/icon-calculator.svg" alt="">
        </div>
      </div>
      <div class="row2-container">
        <div class="box orange">
          <h2>Métier</h2>
          <p>Liste de certains métiers et leur description</p>
          <img src="https://assets.codepen.io/2301174/icon-karma.svg" alt="">
        </div>
      </div>
    </section>
@endsection