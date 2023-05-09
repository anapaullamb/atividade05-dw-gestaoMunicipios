<hr>
<h1>Sistema Gestão de Municípios - Governo do Paraná</h2>
<div style="display: flex;">
      <span >[ Alterar Dados da Cidade ]</span >
      <a href="{{route('cidades.index')}}"><button>Voltar</button></a>
</div>
<hr>
<form action="{{ route('cidades.update', $dados['id']) }}" method="POST">
   <!-- Token de Segurança -->
   <!-- Define o método de submissão como PUT -->
   @csrf
   @method('PUT')
   <label>Nome: </label> <input type='text' name='nome' value='{{$dados['nome']}}'>
   <div>
      <label>Porte: </label> 
      <select id='porte' name='porte' value='{{$dados['porte']}}'>
         <option value="Pequeno" {{ "Pequeno" == $dados['porte'] ? "selected" : "" }} >Pequeno</option>
         <option value="Grande" {{ "Grande" == $dados['porte'] ? "selected" : "" }}>Grande</option>
         <option value="Médio" {{ "Médio" == $dados['porte'] ? "selected" : "" }}>Médio</option>
      </select>
   </div>
   <hr>
   <input type="submit" value="Alterar">
</form>