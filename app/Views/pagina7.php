<h1>{titulo}</h1>

{# comentario de parser #}

<ul>
    {nomes}
    <li>{nome}</li>
    {/nomes}
    {email}
    </br>
    <li>{e-mail}</li>
    {/email}
</ul>

<hr>
<p>É utilizador de Admin?</p>
{if($admin)}
<p>Sim</p>
{else}
<p>Não</p>
{endif}