<div class="widget-container widget_loan_calculator">

    <div class="widget-head">

        <h3 class="widget-title">Loan Calculator</h3>
        <h3 class="">1 USD = <span style="color: coral">{{$usd}}</span> BYN</h3>
    </div>

    <div class="entry-loan">

        <form action="#" method="POST" name="myform" id="loan">
@csrf
            <table>
                <tr>
                    <td><label for="LoanAmount">Car Loan Amount</label></td>
                    <td><input name="LoanAmount" id="LoanAmount" type="text" value="3000"/></td>
                    <td>$</td>
                </tr>
                <tr>
                    <td><label for="InterestRate">Annual Interest Rate</label></td>
                    <td><input name="InterestRate" id="InterestRate" type="text" value="7.0"/></td>
                    <td>%</td>
                </tr>
                <tr>
                    <td><label for="NumberOfYears">Term of Car Loan</label></td>
                    <td><input name="NumberOfYears" id="NumberOfYears" type="text" value="4"/></td>
                    <td>Years</td>
                </tr>
                <tr>
                    <td>
                        <button name="cal" class="button orange">Calculate</button>
                    </td>
                </tr>
                <tr>
                    <td><label for="NumberOfPayments">Number of Car Payments</label></td>
                    <td><input readonly="readonly" type="text" id="NumberOfPayments"
                               name="NumberOfPayments"/></td>
                    <td></td>
                </tr>
                <tr>
                    <td><label for="MonthlyPayment">Monthly Payment</label></td>
                    <td><input readonly="readonly" type="text" id="MonthlyPayment"
                               name="MonthlyPayment"/></td>
                    <td>$</td>
                </tr>
            </table>

        </form>

    </div><!--/ .entry-loan-->

</div><!--/ .widget-container-->
