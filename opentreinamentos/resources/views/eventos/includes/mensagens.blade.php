@if($mensagem = Session::get('sucesso'))
<style>
     .mensagem {
          background-color: #D4EDDA ;
          color: #155724;
          border: 1px solid #C3E6CB;
          width: 100%;
          margin-bottom: 0;
          text-align: center;
          padding: 10px;
          font-size: 14px;
     }
</style>

<div class="card">
     <div class="card-content white-text">
     <p class="mensagem">{{ $mensagem }}</p>

     </div>

</div>


@endif