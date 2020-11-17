<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Manage Promotions</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css"
    />
  </head>
  <body>
    <div class="container mb-3 mt-3">
      <table
        class="table table-striped table-bordered"
        id="mydatatable"
        style="border-radius: 4px"
      >
        <thead>
          <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Promotion ID</th>
            <th>Promotion Amount</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Eat a Peach</td>
            <td>abc123</td>
            <td class="user-type">$20</td>
            <td class="status">
              <span class="status text-success">&bull;</span> Active
            </td>
            <td id="suspension">
              <select onchange="changeSelected();">
                <option>Active</option>
                <option>Inactive</option>
                <option>Delete</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>A Killing Frost</td>
            <td>bcd123</td>
            <td class="user-type">10%</td>
            <td class="status">
              <span class="status text-success">&bull;</span> Inactive
            </td>
            <td id="suspension">
              <select onchange="changeSelected();">
                <option>Active</option>
                <option>Inactive</option>
                <option>Delete</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>3</td>
            <td>I Am Good Every Thing</td>
            <td>cde123</td>
            <td class="user-type">15%</td>
            <td class="status">
              <span class="status text-success">&bull;</span> Active
            </td>
            <td id="suspension">
              <select onchange="changeSelected();">
                <option>Active</option>
                <option>Inactive</option>
                <option>Delete</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>4</td>
            <td>Japanese For Busy People</td>
            <td>def123</td>
            <td class="user-type">$10</td>
            <td class="status">
              <span class="status text-success">&bull;</span> Inactive
            </td>
            <td id="suspension">
              <select onchange="changeSelected();">
                <option>Active</option>
                <option>Inactive</option>
                <option>Delete</option>
              </select>
            </td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Promotion ID</th>
            <th>Promotion Amount</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </tfoot>
      </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.5.4/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <script>
      $("#mydatatable").DataTable();

      var table = document.getElementById("mydatatable");

      table.find("tr").each(function () {
        var $tds = $(this).find("td");
        //var number = $tds.eq(0).text();
        //var name = $tds.eq(1).text();
        //var accountID = $tds.eq(2).text();
        var role = $tds.eq(3).text();
        var status = $tds.eq(4).text();
        var action = $tds.eq(5).text();
        // do something with it
        if (role.value == "User") {
          action.html(
            "<select><option>Suspend</option><option>Unsuspend</option></select>"
          );
        } else if (role.value == "Employee") {
          action.html("<button>Promote</button>");
        } else if (role.value == "Admin") {
          action.html("<button>Demote</button>");
        }
      });

      function changeSelected() {
        var select = document.getElementById("suspension").value;
        if (select.value == "Suspended") {
          status.html(
            "<p><span class='status text-warning'>&bull;</span> Inactive</p>"
          );
        } else if (select.value == "Unsuspended") {
          status.html(
            "<p><span class='status text-success'>&bull;</span> Active</p>"
          );
        }
      }
    </script>
  </body>
</html>
