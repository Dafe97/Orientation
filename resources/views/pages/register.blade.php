<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <style>
    body{
      background-color: #00334e;
      margin-top: 5px;
    }
    .main-register{
        width: 60%;
        margin-top: 15px;
        padding: 15px;
        background-color: white;
        margin: auto;
        border-radius: 5px;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
       
    }
    @media only screen and (max-width: 992px) {
        .main-register{
          width: 90%;
        }
     }
  </style>
</head>
<body>
  <x-auth-validation-errors class="mb-4" :errors="$errors" />
  <div class="main-register" >
    <form autocomplete="off" method="POST" action="{{ route('register') }}">
      @csrf
      {{-- pseudo --}}
      <div class="form-group">
        <label for="pseudo">Pseudo</label><span class="text-danger">*</span>
        <input type="text" class="form-control" id="pseudo" name="pseudo" placeholder="Votre pseudo" required>
      </div>
      {{-- firstname --}}
      <div class="form-group">
        <label for="firstname">Prénom</label><span class="text-danger">*</span>
        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Votre prénom" required>
      </div>
      {{-- lastname --}}
      <div class="form-group">
        <label for="lastname">Nom</label><span class="text-danger">*</span>
        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Votre prénom" required>
      </div>
      {{-- Kind --}}
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="kind" id="feminin" value="F" required>
        <label class="form-check-label" for="feminin">Feminin</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="kind" id="masculin" value="M" required>
        <label class="form-check-label" for="masculin">Masculin</label>
      </div>
      {{-- level --}}
      <div class="form-group">
          <label  for="inlineFormCustomSelectPref">Niveau d'etude</label><span class="text-danger">*</span>
          <div>
            <select class="form-control" id="level" name="level">
              <option selected>Choisir votre niveau</option>
              <option value="Bachelier">Bachelier</option>
              <option value="Etudiant">Etudiant</option>
            </select>
          </div>
      </div>
      {{-- faculty --}}
      <div class="form-group">
        <label for="faculty">Filère</label><span class="text-danger">*</span>
        <input type="text" class="form-control" id="faculty" name="faculty" placeholder="Votre filère" required>
      </div>
      {{-- phone --}}
      <div class="form-group">
        <label for="phone">Tel</label><span class="text-danger">*</span>
        <input type="number" class="form-control" id="phone" name="phone" placeholder="Numéro" required>
      </div>
      {{-- Email --}}
      <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" required>
      </div>
      {{--password  --}}
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe" required>
      </div>
      {{--password confirm --}}
      <div class="form-group">
        <label for="password_confirmation">Mot de passe</label>
        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Mot de passe de confirmation" required>
      </div>
      <div class="mt-2">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>

</body>
</html>
