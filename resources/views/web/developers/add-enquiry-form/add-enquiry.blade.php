<div class="contactform-area contact-us-form" style="text-align: left !important;">
    <div class="formHeading text-center">
        <h3>Build Your Team</h3>
        <p>Get your project started with India's top IT experts</p>
    </div>
    <form action="{{ route('enquiryData') }}" method="post" enctype="multipart/form-data" id="enquiry-form">
        @csrf
        <div class="form-group">
            <i class="fa fa-user" aria-hidden="true"></i>
            <input type="text" class="form-control" name="name" placeholder="Name" >
            @if ($errors->has('name'))
            <span class="error">{{ $errors->first('name') }}</span>
            @endif
        </div>

        <div class="form-group">
            <i class="fa fa-envelope" aria-hidden="true"></i>
            <input type="email" class="form-control" name="email" placeholder="Email" >
            @if ($errors->has('email'))
            <span class="error">{{ $errors->first('email') }}</span>
            @endif
        </div>

        <div class="form-group">
            <i class="fa fa-mobile" aria-hidden="true"></i>
            <input type="phone" class="form-control" name="phone_no" placeholder="Phone" >
            @if ($errors->has('phone_no'))
            <span class="error">{{ $errors->first('phone_no') }}</span>
            @endif
        </div>

        <div class="form-group">
            <i class="fa fa-globe" aria-hidden="true"></i>
            <input type="text" class="form-control" name="country" placeholder="Country" >
            @if ($errors->has('country'))
            <span class="error">{{ $errors->first('country') }}</span>
            @endif
        </div>

        <div class="form-group">
            <i class="fa fa-list-alt" aria-hidden="true"></i>
            <textarea name="requirement" id="message" class="form-control" rows="7" cols="25" placeholder="Requirement"></textarea>
            @if ($errors->has('requirement'))
            <span class="error">{{ $errors->first('requirement') }}</span>
            @endif
        </div>

        <div class='file form-group'>
            <label for='input-file'>
                Browse | Drop Files Here
            </label>
            <input name="file" id='input-file' type='file' />
            @if ($errors->has('file'))
            <span class="error">{{ $errors->first('file') }}</span>
            @endif
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block">Hire Developers Now</button>
        </div>
    </form>
</div>
