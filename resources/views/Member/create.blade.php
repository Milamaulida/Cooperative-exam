<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Member</title>
</head>
<body>
    <center><h1 class="text-center mb-4"> Create Member</h1></center>
    <form action="/member/store" method="post">
    {{ csrf_field() }}
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="user_id" class="form-label">User ID</label>
                                <input type="text" class="form-control" name="user_id" required="required">
                            </div>
                            <div class="mb-3">
                                <label for="type_loan_interest" class="form-label">Type Loan Interest</label>
                                <select class="form-select" aria-label="Default select example" name="type_loan_interest" required="required">
                                    <option>choose</option>
                                    <option value="7%">7%</option>
                                    <option value="20%">20%</option>
                                </select>                            
                            </div>
                            <div class="mb-3">
                                <label for="limit_loan" class="form-label">Limit Loan</label>
                                <input type="text" class="form-control" name="limit_loan" required="required">
                            </div>
                            <button type="submit" class="btn btn-primary">Save Data</button>
                            <a href="member" type="" class="btn btn-primary">Kembali</a> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
    
    <br>
    <br>
    
 
</body>
</html>