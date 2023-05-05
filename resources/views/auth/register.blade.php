<x-layout>
     <div class="container">
        <div class="row">
            <div class="col-md-5 mx-auto">
                <h3 class="text-primary text-center my-2 ">Register Form</h3>
                <div class="card p-4 my-3 shadow-sm">
                    <form method="POST" action="/register">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            name="name"
                            value="{{old('name')}}" required>
                            <x-error name="name"/>
                          </div>
                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Username</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            name="username"
                            value="{{old('username')}}" required>
                            <x-error name="username"/>
                          </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Email address</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                          name="email"
                          value="{{old('email')}}" required>
                          <x-error name="email"/>
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1"
                          name="password"
                          value="{{old('password')}}" required>
                          <x-error name="password"/>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>
        </div>
     </div>
</x-layout>