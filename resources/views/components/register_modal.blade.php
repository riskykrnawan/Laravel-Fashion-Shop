<!-- Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="registerModalLabel">Register</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/admin/products">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
          </div>
          <p class="mt-3 text-small text-secondary">People who use our services may upload your contact information to Nikky. <a href="#">Learn more</a></p>
          
          <p class="text-small text-secondary">By clicking Register, you agree to our Terms , <a href="#">Privacy Policy</a> and <a href="#">Cookie Policy</a> . You will receive an SMS Notification from us and can stop at any time.</p>
          {{-- <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="termsCheck">
            <label class="form-check-label text-underline" for="termsCheck">I accept Terms and conditions</label>
          </div> --}}
          <button type="submit" class="btn btn-secondary text-light rounded-0 w-100">Register</button>
        </form>
      </div>
      <div class="modal-footer">
        <span>Have an account ?</span>
        <button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
      </div>
    </div>
  </div>
</div>