<div class="form-group">
	{{ Form::label('ipi', 'Ipi') }}
	{{ Form::number('ipi', old('ipi'), ['class' => 'form-control', 'step' => '0.01']) }}
</div>