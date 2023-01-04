<div class="row">
    <div class="col-sm-8">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    {{ Form::label('title', 'Title') }}<i class="text-danger">*</i>
                    {{ Form::text('title', old('title') , array('class' => error_field($errors,'title'),'required' => 'true','placeholder'=>'Enter title here...')) }}
                    {!!error_msg($errors,'title')!!}
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    {{ Form::label('card_pic', 'Select Image') }}
                    <input type="file" class="form-control" name="image" id="image" accept="image/x-png,image/gif,image/jpeg" />
                    {!!error_msg($errors,'image')!!}
                </div>
            </div>
        </div>
        <div class="form-group">
            {{ Form::label('description', 'Description') }}<i class="text-danger">*</i>
            {{ Form::textarea('description',null, array('class' => error_field($errors,'description'),'required' => 'true','placeholder'=>'Enter description here...','rows'=>'3')) }}
            {!!error_msg($errors,'description')!!}
        </div>
    </div>
</div>