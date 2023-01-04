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
                    <input type="file" class="form-control" name="image" id="image" accept="image/x-png,image/gif,image/jpeg"/>
                    {!!error_msg($errors,'image')!!}
                </div>
            </div>
        </div>
        <div class="form-group">
            {{ Form::label('short_description', 'Short Description') }}
            {{ Form::textarea('short_description',null, array('class' => error_field($errors,'short_description'),'placeholder'=>'Enter short description here...','rows'=>'3')) }}
            {!!error_msg($errors,'short_description')!!}
        </div>
         <div class="form-group">
            {{ Form::label('description', 'Description') }}<i class="text-danger">*</i>
            {{ Form::textarea('description',null, array('class' => error_field($errors,'description'),'placeholder'=>'Enter description here...','required' => 'true','rows'=>'5')) }}
            {!!error_msg($errors,'description')!!}
        </div>
    </div>
</div>