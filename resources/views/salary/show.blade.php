@extends('layouts.mainbody')

@section('DashboardContent')
     <style>
         .psh-logo img{
             height: 130px;
         }

         .section{
            border-bottom: 5px solid black;
        }
        .pdf-footer{
            width: 100%;
            text-align: center;
            margin-top: 50px;
        }


        .customer-info {
            display: block;
            width: 100%;
            margin-left:-30px;

        }
        .customer-info li{
            list-style: none;
            font-size: 20px;
        }

        .invoice-title, .company-title {
            font-size: 2rem;
            color: green;
            font-weight: 800;
            padding-left: 36px
        }
        .invoice-info li{
            list-style: none;
            font-size: 20px;
        }
        .client-group{
            position:relative;
        }
        .pdfAction{
            position: absolute;
            right: 10px;
            top: 10px;
            background-color: red;
            line-height: 40px;
            color: white;
            padding: 0px 16px;
        } *{
              font-size:20px;
          }
        .table{
            font-size:20px;
        }
        @media print {
            .invoice-area{
                margin-top:200px
            }
            header{
                display:none;
            }
            .pdfAction{
                display:none;
            }
            .bill-to{
                color:green;
            }

            .left-side-bar{
                display: none;
            }
.halcyon-title-area{
    display: none;
}
            *{
                font-size:20px;
            }

        }
    </style>

    <div class="invoice-area">
        <div class="row">
            <div class="col-md-6 .company-info">
                <div class="psh-logo">
                    <img src="{{asset('halcyon.png')}}"/>
                </div>
                <div class="office-address">15/2, Level 8(A), Momtaz Heights,</br>
                    Shyamoli, Mirpur Main Road,M</br>
                    Dhaka-1207, Bangladesh.</div>
                <div class="mobile"> +8801647-647404</div>
                <div class="website">Website: www.halcyonbd.com </div>
            </div>

            <div class="col-md-6">
                <div class="invoice-title">Invoice #00{{$salary->id}} </div>

                <ul class="invoice-info">
                    <li>Salary count from: {{$salary->salary_start_date}}</li>
                    <li>Salary count End: {{$salary->salary_end_date}}</li>
                    <li>Employee ID: {{$salary->user_id}} </li>

                    <li>Invoice Date: {{$salary->salary_generate_date}}</li>
                </ul>
            </div>
        </div>
        <div class="row client-group">
            <button class="pdfAction" onclick="print()">Print Invoice</button>

            <div class="bill-to" style="font-size: 20px; font-weight: 800; height: 40px; text-align: center;  line-height: 40px; margin:20px 0px 15px 10px;" >Bill To</div>
            <ul class="customer-info">
                <li>Name:  {{$salary->name}}</li>

            </ul>
        </div>


        <table class="table table-bordered">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Serial No</th>
                <th scope="col">Description</th>
                <th scope="col">Amount</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td> Basic Salary</td>
                <td>{{ $salary->basic_salary }}</td>
            </tr>

            <tr>
                <th scope="row">2</th>
                <td>bonus</td>
                <td>{{$salary->bonus}}</td>
            </tr>

            <tr class="section">
                <th scope="row">3</th>
                <td>Total Working Day</td>
                <td>{{$salary->total_working_day}}</td>
            </tr>

            <tr>
                <th scope="row"></th>
                <td>Final Salary</td>
                <td>{{$salary->final_salary}}</td>
            </tr>
            </tbody>
        </table>


        <div class="pdf-footer">
            <div class="row">
                <div class="col-md-3"></div>
                <p>Thank you for your Journey with Halcyon Family</p>
            </div>
        </div>
    </div>


@endsection
