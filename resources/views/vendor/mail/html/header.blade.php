<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="{{ asset('img') }}/logo_tekun.png" class="logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
