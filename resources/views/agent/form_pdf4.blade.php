<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<style>

/* HTMLtable.com */
.divTable{ display: table; padding:10px;  }
.divTableRow { display: table-row; }
.divTableHeading { display: table-header-group;}
.divTableCell, .divTableHead { display: table-cell; }
.divTableHeading { display: table-header-group;}
.divTableFoot { display: table-footer-group;}
.divTableBody { display: table-row-group;}
</style>
</head>
<body>

<table class="divTable">
  <tbody class="divTableBody">
  <tr class="divTableRow">
      <td class="divTableCell" style="border: 1px solid #000; text-align: center;">
      	THIS CERTIFICATE IS ISSUED AS A MATTER OF INFORMATION ONLY AND CONFERS NO RIGHTS UPON THE CERTIFICATE HOLDER. THIS CERTIFICATE DOES NOT AFFIRMATIVELY OR NEGATIVELY AMEND, EXTEND OR ALTER THE COVERAGE AFFORDED BY THE POLICIES BELOW. THIS CERTIFICATE OF INSURANCE DOES NOT CONSTITUTE A CONTRACT BETWEEN THE ISSUING INSURER(S), AUTHORIZED REPRESENTATIVE OR PRODUCER, AND THE CERTIFICATE HOLDER.
      </td>
  </tr>

  <tr class="divTableRow">
      <td class="divTableCell" style="border: 1px solid #000; text-align: center;">
      	IMPORTANT: If the certificate holder is an ADDITIONAL INSURED, the policy(ies) must be endorsed. If SUBROGATION IS WAIVED, subject to the terms and conditions of the policy, certain policies may require an endorsement. A statement on this certificate does not confer rights to the certificate holder in lieu of such endorsement(s).
      </td>
  </tr>

   <tr class="divTableRow">
      <td class="divTableCell" style="border: 1px solid #000;">
      		<table class="divTable">
                <tbody class="divTableBody">
                    <tr class="divTableRow">
                        <td class="divTableCell"
                                style="border: 1px solid #000;">
                          PRODUCER
                        </td>
                        <td class="divTableCell"
                                style="border: 1px solid #000;">
                            <table class="divTable">
                          		<tbody class="divTableBody">
                                  <tr class="divTableRow">
                                      <td class="divTableCell"
                                           style="border: 1px solid #000;">
                                        Contact
                                      </td>
                                  </tr>
                                  <tr class="divTableRow">
                                      <td class="divTableCell"
                                           style="border: 1px solid #000;">
                                        Phone
                                      </td>
                                      <td class="divTableCell"
                                           style="border: 1px solid #000;">
                                        Fax
                                      </td>
                                  </tr>
                                  <tr class="divTableRow">
                                      <td class="divTableCell"
                                           style="border: 1px solid #000;">
                                        Email
                                      </td>
                                  </tr>
                                </tbody>
                              </table>
                        </td>
					</tr>
					<tr class="divTableRow">
						<td class="divTableCell"
                                style="border: 1px solid #000;">
                          INSURED
                        </td>
					</tr>
                </tbody>
  			</table>
      </td>
   </tr>
 </tbody>
</table>


<table class="divTable">
  <tbody class="divTableBody">
    <tr class="divTableRow">
      <td class="divTableCell" >
        @foreach ($policytypes->whereNotIn('id', [5,6,7,8,9]) as $pt)
              <table class="divTable">
                  <tbody class="divTableBody">
                      <tr class="divTableRow">
                          <td class="divTableHead">{{ $pt->type_name }}</td>
                      </tr>
                      @foreach ($pt->policies as $policy)
                          <tr class="divTableRow">
                            @if($policy->id == 8 || $policy->id == 9)
                                <td class="divTableCell">
                                        <input type="checkbox" /> {{ $policy->where('id', 8)->first()->policy_title }}
                                        <input type="checkbox" /> {{ $policy->where('id', 9)->first()->policy_title }}
                                </td>
                              @else
                                <td class="divTableCell">
                                  <input type="checkbox" /> {{ $policy->policy_title }}
                                </td>
                              @endif
                          </tr>
                      @endforeach
                  </tbody> <!--- divTableBody INNER  --->
              </table> <!--- divTable INNER  --->
          @endforeach
      </td> <!--- divTableCell TOP  --->
    </tr> <!--- divTableRow TOP  --->

  </tbody> <!--- divTableBody OUTER  --->
</table> <!--- divTable OUTER  --->

</body>
</html>
