<x-layout>

<div class="container">
    <div class="row">
        <div class="col-12 col-md-6">
        <form action "{{route('submit')}}" method ="POST">
        @csrf
        
  <div class="mb-3">
    <label for="text" class="form-label" >Nome</label>
    <input type="name" name="username" class="form-control" id="text" aria-describedby="nameHelp">
    <div id="nameHelp" class="form-text">inserisci qui il tuo nome.</div>
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Indirizzo e-mail</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">Inserisci qui la tua e-mail.</div>
  </div>

  <div class="form-floating">
  <textarea class="form-control" name="description" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
  <label for="floatingTextarea2">Inserisci qui la tua richiesta</label>
</div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
        </div>
    </div>
</div>

</x-layout>