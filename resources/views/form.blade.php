
<form class="form-pos" action="{{ route('send-email') }}" method="POST">
    @csrf
    <div class="mb-3">
        
        <input type="text" class="form-control" id="name" name="name" placeholder="Name">
    </div>
    <div class="mb-3">
       
        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
    </div>

    <div class="mb-3 d-flex gap-3">
        
        <input type="text" class="form-control" id="place" name="place" placeholder="Birth place">
        
        
        <input type="date" class="form-control" id="birthdate" name="birthdate">
        


    </div>
    <div class="mb-3 d-flex gap-3">
        
        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone">
        <input type="text" class="form-control" id="company" name="company" placeholder="Company">
    </div>
    
    
        
   
    <div class="mb-3">
        
        <textarea class="form-control" id="message" name="message" rows="4" placeholder="Your message"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">SEND</button>
</form>


