{include file='templates/header.tpl'}

</head>
<table class="table">
    <thead>
        <tr>
          <th scope="col">Nombre</th>
          <th scope="col">Genero</th>
          <th scope="col">Nombre del Autor</th>
        </tr>
    </thead>
    <tbody>
    {foreach from=$books item=$book}
        <tr>
            <td>{$book ->libro_nombre}</td>
            <td>{$books->genero}</td>
            <td>{$books->autor_nombre}</td>
        </tr> 
    {/foreach}

</tbody>
</table>
