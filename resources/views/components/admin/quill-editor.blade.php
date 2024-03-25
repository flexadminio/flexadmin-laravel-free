<div class="quill-editor-wrapper">
    <div id="{{ $name }}-quill-editor" style="height: 300px;">
        {!! $value !!}
    </div>
    {!! Form::hidden($name, null) !!}
</div>

<script>
  $(function() {
    var {{ $name }}_editor = new Quill('#{{ $name }}-quill-editor', {
      modules: quillSnowModules,
      theme: 'snow'
    });
    {{ $name }}_editor.on('text-change', function(delta, source) {
      document.getElementById('{{ $name }}').value = {{ $name }}_editor.root.innerHTML;
    });
  });
</script>