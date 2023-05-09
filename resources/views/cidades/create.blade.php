<hr>
<h1>Sistema Gestão de Municípios - Governo do Paraná</h2>
<div style="display: flex;">
      <span >[ Cadastrar Nova Cidade ]</span >
      <a href="{{route('cidades.index')}}"><button>Voltar</button></a>
</div>
<hr>
<form action="{{ route('cidades.store') }}" method="POST">
   <!-- Token de segurança salvo na sessão, verificar o formulário submetido -->
   @csrf
   <label>Nome: </label> <input type='text' name='nome'>
   <div>
      <label>Porte: </label> 
      <select id='porte' name='porte'>
         <option value="Pequeno">Pequeno</option>
         <option value="Grande">Grande</option>
         <option value="Médio">Médio</option>
      </select>
   </div>
   <hr>
   <input type="submit" value="Cadastrar">
</form>