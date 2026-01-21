<style>
    table { border-collapse: collapse; }
    td {
        width: 40px;
        height: 40px;
    }
</style>

<table border="1">
@for ($i = 0; $i < $n; $i++)
    <tr>
    @for ($j = 0; $j < $n; $j++)
        <td style="background-color: {{ ($i + $j) % 2 == 0 ? '#fff' : '#000' }}"></td>
    @endfor
    </tr>
@endfor
</table>
