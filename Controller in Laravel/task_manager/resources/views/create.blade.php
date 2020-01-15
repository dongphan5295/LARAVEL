
<form action="store" method="post">
    @csrf
    <div class="form-group">
        <label for="exampleInputName1">Fullname</label>
        <input type="text" class="form-control" id="exampleInputName1" name="name" placeholder="Enter fullname">
      </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPhone1">Phone</label>
      <input type="text" class="form-control" id="exampleInputPhone1" name="phone" placeholder="Enter phone">
    </div>
    <button type="submit" class="btn btn-primary">Register</button>
  </form>
