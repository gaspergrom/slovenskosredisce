<div class="flex flex--center">
    <div class="col-md-8">
        @if($errors->any())
            <div class="mt10 mb30" style="padding: 10px; background: #e72530; color: white;">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
    </div>
</div>