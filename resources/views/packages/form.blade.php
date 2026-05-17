<form action="{{ route('bookings.store') }}" method="POST" class="mb-4">
    @csrf
    <input type="hidden" name="package_id" value="{{ $package->id ?? '' }}">

    <div class="row">
        <div class="mb-3 col-md-6">
            <label class="form-label">Your name</label>
            <input name="customer_name" class="form-control" value="{{ old('customer_name') }}" required>
        </div>
        <div class="mb-3 col-md-6">
            <label class="form-label">Email</label>
            <input name="email" type="email" class="form-control" value="{{ old('email') }}" required>
        </div>
    </div>

    <div class="row">
        <div class="mb-3 col-md-6">
            <label class="form-label">Contact number</label>
            <input name="contact_number" class="form-control" value="{{ old('contact_number') }}">
        </div>
        <div class="mb-3 col-md-6">
            <label class="form-label">Event type</label>
            <input name="event_type" class="form-control" value="{{ old('event_type') }}">
        </div>
    </div>

    <div class="mb-3">
        <label class="form-label">Message</label>
        <textarea name="message" class="form-control" rows="3">{{ old('message') }}</textarea>
    </div>

    <button class="btn btn-primary">Send booking request</button>
</form>
