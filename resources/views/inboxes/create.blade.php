@extends('inboxes')

@section('content')
{!! Form::open(array('url' => 'inboxes')) !!}
{{--<form class="inbox-compose form-horizontal" id="fileupload" action="javascript:;" method="POST" enctype="multipart/form-data">--}}
    <div class="inbox-compose-btn">
       {{-- <button class="btn blue">--}}
            <i class="fa fa-check"></i>{{--Send--}}
            {!! Form::submit('Send', array('class' => 'btn btn-primary','name'=>'sent')) !!}

       {{-- </button>--}}
        {{--<button class="btn inbox-discard-btn">Discard

        </button>--}}
            {!! Form::submit('Discard', array('class' => 'btn btn-primary','name'=>'discard')) !!}
        {{--<button class="btn">Draft--}}
            {!! Form::submit('Draft', array('class' => 'btn btn-primary','name'=>'draft')) !!}
        {{--</button>--}}
    </div>
    <div class="inbox-form-group mail-to">
        {!! Form::label('receiver_email_id','To') !!}

        {{--<label class="control-label">To:</label>--}}
        <div class="controls controls-to">
            {!! Form::email('receiver_email_id', Input::old('receiver_email_id'), array('class' => 'form-control')) !!}
            {{--<input type="text" class="form-control" name="to">--}}
			{{--<span class="inbox-cc-bcc">
			<span class="inbox-cc">
			Cc </span>
			<span class="inbox-bcc">
			Bcc </span>
			</span>--}}
        </div>
    </div>
{{--    <div class="inbox-form-group input-cc display-hide">
        <a href="javascript:;" class="close">
        </a>
        <label class="control-label">Cc:</label>
        <div class="controls controls-cc">
            <input type="text" name="cc" class="form-control">
        </div>
    </div>
    <div class="inbox-form-group input-bcc display-hide">
        <a href="javascript:;" class="close">
        </a>
        <label class="control-label">Bcc:</label>
        <div class="controls controls-bcc">
            <input type="text" name="bcc" class="form-control">
        </div>
    </div>--}}

    <div class="inbox-form-group">
        {!! Form::label('subject','Subject') !!}
        {{--<label class="control-label">Subject:</label>--}}
        <div class="controls">
            {!! Form::text('subject', Input::old('subject'), array('class' => 'form-control')) !!}
            {{--<input type="text" class="form-control" name="subject">--}}
        </div>
    </div>

    <div class="inbox-form-group">
        {!! Form::textarea('body_description', Input::old('body_description'), array('class' => 'form-control inbox-editor inbox-wysihtml5 form-control')) !!}
        {{--<textarea class="inbox-editor inbox-wysihtml5 form-control" name="message" rows="12"></textarea>--}}
    </div>
    {{--<div class="inbox-compose-attachment">
        <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
		<span class="btn green fileinput-button">
		<i class="fa fa-plus"></i>
		<span>
		Add files... </span>
		<input type="file" name="files[]" multiple>
		</span>
        <!-- The table listing the files available for upload/download -->
        <table role="presentation" class="table table-striped margin-top-10">
            <tbody class="files">
            </tbody>
        </table>
    </div>--}}
    <script id="template-upload" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-upload fade">
        <td class="name" width="30%"><span>{%=file.name%}</span></td>
        <td class="size" width="40%"><span>{%=o.formatFileSize(file.size)%}</span></td>
        {% if (file.error) { %}
            <td class="error" width="20%" colspan="2"><span class="label label-danger">Error</span> {%=file.error%}</td>
        {% } else if (o.files.valid && !i) { %}
            <td>
                <p class="size">{%=o.formatFileSize(file.size)%}</p>
                <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                   <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                   </div>
            </td>
        {% } else { %}
            <td colspan="2"></td>
        {% } %}
        <td class="cancel" width="10%" align="right">{% if (!i) { %}
            <button class="btn btn-sm red cancel">
                       <i class="fa fa-ban"></i>
                       <span>Cancel</span>
                   </button>
        {% } %}</td>
    </tr>
{% } %}
	</script>
    <!-- The template to display files available for download -->
    <script id="template-download" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-download fade">
        {% if (file.error) { %}
            <td class="name" width="30%"><span>{%=file.name%}</span></td>
            <td class="size" width="40%"><span>{%=o.formatFileSize(file.size)%}</span></td>
            <td class="error" width="30%" colspan="2"><span class="label label-danger">Error</span> {%=file.error%}</td>
        {% } else { %}
            <td class="name" width="30%">
                <a href="{%=file.url%}" title="{%=file.name%}" data-gallery="{%=file.thumbnail_url&&'gallery'%}" download="{%=file.name%}">{%=file.name%}</a>
            </td>
            <td class="size" width="40%"><span>{%=o.formatFileSize(file.size)%}</span></td>
            <td colspan="2"></td>
        {% } %}
        <td class="delete" width="10%" align="right">
            <button class="btn default btn-sm" data-type="{%=file.delete_type%}" data-url="{%=file.delete_url%}"{% if (file.delete_with_credentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
                <i class="fa fa-times"></i>
            </button>
        </td>
    </tr>
{% } %}
	</script>
    <div class="inbox-compose-btn">
        {{--<button class="btn blue">--}}
            <i class="fa fa-check"></i>{{--Send--}}
            {!! Form::submit('Send', array('class' => 'btn btn-primary')) !!}
        {{--</button>--}}
        {{--<button class="btn">Discard--}}
            <i class="fa fa-check"></i>{{--Send--}}
            {!! Form::submit('Discard', array('class' => 'btn btn-primary')) !!}
        {{--</button>--}}
        {{--<button class="btn">Draft</button>--}}
        <i class="fa fa-check"></i>{{--Send--}}
        {!! Form::submit('Draft', array('class' => 'btn btn-primary')) !!}
    </div>
{{--</form>--}}
{!! Form::close() !!}

@endsection