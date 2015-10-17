<h1>Edit Article</h1>

{!! Form::open() !!}
<table>
    <tr>
        <td align="right">Title: </td>
        <td>{!! Form::text('title', $record->title) !!}<br />
            {!! ($errors->has('title') ? $errors->first('title') : '') !!}
        </td>
    </tr>
    <tr>
        <td align="right">Teaser: </td>
        <td>{!! Form::text('teaser', $record->teaser) !!}<br />
            {!! ($errors->has('teaser') ? $errors->first('teaser') : '') !!}
        </td>
    </tr>
    <tr>
        <td valign="top" align="right">Body: </td>
        <td>{!! Form::textarea('body', $record->body) !!}<br />
            {!! ($errors->has('body') ? $errors->first('body') : '') !!}
        </td>
    </tr>
    <tr>
        <td></td>
        <td>{!! Form::submit('Send') !!}</td>
    </tr>
</table>
{!! Form::close() !!}