{{-- <h3>Fornecedores</h3> --}}

{{-- Os comentários seram assim por agora nos blades --}}

{{-- 
@php
 // Os Comentários nos blocos de código php seram assim
 echo 'teste';
@endphp
 --}}


{{-- <html>
 <head></head>
 <body>
  <h3>Fornecedores</h3>
  <!-- Comentário HTML -->

  <p> " teste "</p>
 </body>
</html> --}}

<h3>Fornecedores</h3>

{{-- @dd($fornecedores) --}}

{{-- @if (count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Há alguns fornecedores cadastrados</h3>
@elseif(count($fornecedores) > 10)
     <h3>Existem muitos fornecedores cadastrados</h3>
@else
     <h3>Ainda não há fornecedores cadastrados</h3>
@endif --}}

{{-- <div>
 <h1>Estado civil: </h1>
 @if ($fornecedores['fornecedor']['estado_civil'] == 0)
    <h3>Solteiro</h3>
@elseif($fornecedores['fornecedor']['estado_civil'] == 1)
     <h3>Casado</h3>
@elseif($fornecedores['fornecedor']['estado_civil'] == 2)
     <h3>Amasiado</h3>
@else
     <h3>Enrolado</h3>
@endif
</div>

<div>
 <h1>IMC</h1>

 <h3>{{ number_format($fornecedores['fornecedor']['peso'] / ($fornecedores['fornecedor']['altura'] * $fornecedores['fornecedor']['altura']), 2) }}</h3>
</div>

<div>
 <h1>Status</h1>
 @if ($fornecedores['fornecedor']['salario'] >= 2500)
 <h3>Rico(a)</h3>
 @else
 <h3>Pobre</h3>
 @endif
</div>

<div>
 <h1>A pessoa é:</h1>
 @if ((date('Y') - $fornecedores['fornecedor']['ano_nascimento']) <= 11)
    <h3>Criança</h3>
@elseif((date('Y') - $fornecedores['fornecedor']['ano_nascimento']) >= 12 && (date('Y') - $fornecedores['fornecedor']['ano_nascimento']) <= 17)
     <h3>Adolescente</h3>
@elseif((date('Y') - $fornecedores['fornecedor']['ano_nascimento']) >= 18 && (date('Y') - $fornecedores['fornecedor']['ano_nascimento']) <= 59)
     <h3>Adulta</h3>
@else
     <h3>Idosa</h3>
@endif
</div>

<div>
 <h1>A pessoa pode votar?:</h1>
 @if ((date('Y') - $fornecedores['fornecedor']['ano_nascimento']) >= 16)
     <h3>sim</h3>
 @else
 <h3>não</h3>
 @endif
</div>

<div>
 <h1>Pertence ao estado de: </h1>
  @if ($fornecedores['fornecedor']['estado'] == 'AC')
      <h3>Acre</h3>
  @elseif ($fornecedores['fornecedor']['estado'] == 'AL')
      <h3>Alagoas</h3>
  @elseif ($fornecedores['fornecedor']['estado'] == 'AM')
      <h3>Amazonas</h3>
  @elseif ($fornecedores['fornecedor']['estado'] == 'AP')
      <h3>Ápia</h3>
  @elseif ($fornecedores['fornecedor']['estado'] == 'BA')
      <h3>Bahia</h3>
  @elseif ($fornecedores['fornecedor']['estado'] == 'CE')
      <h3>Ceará</h3>
  @elseif ($fornecedores['fornecedor']['estado'] == 'DF')
      <h3>Distrito Federal</h3>
  @elseif ($fornecedores['fornecedor']['estado'] == 'ES')
      <h3>Espírito Santo</h3>
  @elseif ($fornecedores['fornecedor']['estado'] == 'GO')
      <h3>Goiás</h3>
  @elseif ($fornecedores['fornecedor']['estado'] == 'MA')
      <h3>Maranhão</h3>
  @elseif ($fornecedores['fornecedor']['estado'] == 'MG')
      <h3>Minas Gerais</h3>
  @elseif ($fornecedores['fornecedor']['estado'] == 'MS')
      <h3>Mato Grosso do Sul</h3>
  @elseif ($fornecedores['fornecedor']['estado'] == 'MT')
      <h3>Mato Grosso</h3>
  @elseif ($fornecedores['fornecedor']['estado'] == 'PA')
      <h3>Pará</h3>
  @elseif ($fornecedores['fornecedor']['estado'] == 'PB')
      <h3>Paraíba</h3>
  @elseif ($fornecedores['fornecedor']['estado'] == 'PE')
      <h3>Pernambuco</h3>
  @elseif ($fornecedores['fornecedor']['estado'] == 'PI')
      <h3>Piauí</h3>
  @elseif ($fornecedores['fornecedor']['estado'] == 'PR')
      <h3>Paraná</h3>
  @elseif ($fornecedores['fornecedor']['estado'] == 'RJ')
      <h3>Rio de Janeiro</h3>
  @elseif ($fornecedores['fornecedor']['estado'] == 'RN')
      <h3>Rio Grande do Norte</h3>
  @elseif ($fornecedores['fornecedor']['estado'] == 'RO')
      <h3>Rondônia</h3>
  @elseif ($fornecedores['fornecedor']['estado'] == 'RR')
      <h3>Roraima</h3>
  @elseif ($fornecedores['fornecedor']['estado'] == 'RS')
      <h3>Rio Grande do Sul</h3>
  @elseif ($fornecedores['fornecedor']['estado'] == 'SC')
      <h3>Santa Catarina</h3>
  @elseif ($fornecedores['fornecedor']['estado'] == 'SE')
      <h3>Segipe</h3>
  @elseif ($fornecedores['fornecedor']['estado'] == 'SP')
      <h3>São Paulo</h3>
  @elseif ($fornecedores['fornecedor']['estado'] == 'TO')
      <h3>Tocantins</h3>
  @else
      <h3>Estado não definido</h3>
  @endif
</div> --}}


<h3>Fornecedor: {{ $fornecedores[0]['nome'] }}</h3>

<h3>Status: {{ $fornecedores[0]['status'] }}</h3>

<h3>
 @unless ($fornecedores[0]['status'] == 'S')
 Fornecedor inativo
 @endunless
</h3>