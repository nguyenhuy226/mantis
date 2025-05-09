@extends('layout')

@section('content')
    <!-- [ Main Content ] start -->
    <section class="pc-container">
        <div class="pc-content">
          <!-- [ breadcrumb ] start -->
          <div class="page-header">
            <div class="page-block">
              <div class="row align-items-center">
                <div class="col-md-12">
                  <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="../dashboard/index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0)">Table</a></li>
                    <li class="breadcrumb-item" aria-current="page">Table Methods</li>
                  </ul>
                </div>
                <div class="col-md-12">
                  <div class="page-header-title">
                    <h2 class="mb-0">Table Methods</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- [ breadcrumb ] end -->

          <!-- [ Main Content ] start -->
          <div class="row">
            <!-- [ basic-table ] start -->
            <div class="col-xl-12">
              <div class="card">
                <div class="card-header">
                  <h5>Tables Methods</h5>
                  <span class="d-block m-t-5">use class <code>table</code> inside table element</span>
                </div>
                <div class="card-body table-border-style">
                  <div class="form-group">
                    <button type="button" class="btn btn-sm btn-light-primary main" id="init">Init</button>
                    <button type="button" class="btn btn-sm btn-light-danger main" id="destroy">Destroy</button>
                  </div>
                  <div class="table-responsive">
                    <table class="table" id="pc-dt-methods">
                      <thead>
                        <tr>
                            <th>Select</th>
                            <th>Customer</th>
                            <th>Version</th>
                            <th data-type="date" data-format="DD.MM.YYYY">Planned upgrade</th>
                            <th>DB-Info</th>
                            <th>Website info</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td>
                                Test one <br>CCode: 33123
                            </td>
                            <td>7.1.5</td>
                            <td>26.11.2018</td>
                            <td>
                                Server: s1 <br>DB: db1
                            </td>
                            <td>
                                Websitename: Red <br>Node: 10
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                Test two <br>CCode: 12353
                            </td>
                            <td>7.1.5.2</td>
                            <td>26.11.2019</td>
                            <td>
                                Server: s1 <br>DB: db2
                            </td>
                            <td>
                                Websitename: Green <br>Node: 6
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                Test three <br>CCode: 33522
                            </td>
                            <td>7.1.6</td>
                            <td>01.01.2020</td>
                            <td>
                                Server: s2 <br>DB: db1
                            </td>
                            <td>
                                Websitename: Orange <br>Node: 5
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                Test four <br>CCode: 25512
                            </td>
                            <td>7.1.7</td>
                            <td>26.03.2021</td>
                            <td>
                                Server: s1 <br>DB: db3
                            </td>
                            <td>
                                Websitename: Blue <br>Node: 10
                            </td>
                        </tr>
                    </tbody>
                    </table>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div id="hide">
                        <h5>Column Visibility</h5>
                        <div class="form-group" id="columns"></div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <h5>Import / Export Data</h5>
                      <div class="form-group">
                        <textarea cols="30" rows="2" class="form-control"
                          placeholder="Paste your csv or json string here..."></textarea>
                      </div>
                      <div class="form-group btn-page">
                        <button type="button" class="btn btn-light-primary btn-sm import" data-type="csv">Import
                          CSV</button>
                        <button type="button" class="btn btn-light-primary btn-sm import" data-type="json">Import
                          JSON</button>
                        <button type="button" class="btn btn-light-success btn-sm export" data-type="csv">Export
                          CSV</button>
                        <button type="button" class="btn btn-light-success btn-sm export" data-type="sql">Export
                          SQL</button>
                        <button type="button" class="btn btn-light-success btn-sm export" data-type="json">Export
                          JSON</button>
                      </div>
                      <div class="form-group">
                        <small>NOTE: The csv column delimiters and line delimiters are set to <code>","</code> and
                          <code>"\n"</code> respectively.</small>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- [ basic-table ] end -->
          </div>
          <!-- [ Main Content ] end -->
        </div>
      </section>
    <!-- [ Main Content ] end -->
@endsection
@push('scripts')
 <!-- datatable Js -->
 <script type="module">
    import { DataTable, convertJSON, convertCSV, exportCSV, exportSQL, exportJSON } from "../assets/js/plugins/module.js"
    const createElement = (nodeName, attrs) => {
      const dom = document.createElement(nodeName)
      if (attrs && "object" == typeof attrs) {
        for (const attr in attrs) {
          if ("text" === attr) {
            const text = document.createTextNode(attrs[attr])
            dom.appendChild(text)
          } else if ("html" === attr) {
            dom.innerHTML = attrs[attr]
          } else {
            dom.setAttribute(attr, attrs[attr])
          }
        }
      }
      return dom
    }
    const checkboxes = document.getElementById("columns"),
      table = document.querySelector('#pc-dt-methods'),
      textarea = document.getElementsByTagName("textarea")[0]
    const hidden = [],
      visible = []
    let inputs = []
    const datatable = new DataTable(table, {
      perPage: 5,
      columns: [
        {
          select: [1, 4, 5],
          type: "html"
        }
      ]
    })
    window.datatable = datatable
    const updateColumns = function () {
      datatable.columns.show(visible)
      datatable.columns.hide(hidden)
    }
    const setCheckboxes = function () {
      inputs = []
      while (visible.length) {
        visible.pop()
      }
      while (hidden.length) {
        hidden.pop()
      }
      checkboxes.innerHTML = ""
      datatable.data.headings.forEach((heading, i) => {
          const checkbox = createElement('div', {
            class: 'checkbox form-check'
          });
          const input = createElement('input', {
            type: 'checkbox',
            class: 'form-check-input',
            id: `checkbox-${i}`,
            name: 'checkbox'
          });
          const label = createElement('label', {
            for: `checkbox-${i}`,
            class: 'form-check-label',
            html: heading.data
          });
        input.idx = i
        if (datatable.columns.visible(i)) {
          input.checked = true
          visible.push(i)
        } else {
          if (hidden.indexOf(i) < 0) {
            hidden.push(i)
          }
        }
        checkbox.appendChild(input)
        checkbox.appendChild(label)
        checkboxes.appendChild(checkbox)
        inputs.push(input)
      })
      inputs.forEach(input => {
        input.onchange = function (_event) {
          if (input.checked) {
            hidden.splice(hidden.indexOf(input.idx), 1)
            visible.push(input.idx)
          } else {
            visible.splice(visible.indexOf(input.idx), 1)
            hidden.push(input.idx)
          }
          updateColumns()
        }
      })
    }

    datatable.on("datatable.init", () => {
      setCheckboxes()
    })
    window.dt = datatable
    textarea.addEventListener("input", function (_event) {
      if (this.value.length) {
        this.parentNode.classList.remove("error")
      }
    })
    document.querySelectorAll(".export").forEach(el => {
      el.addEventListener("click", _event => {
        const type = el.dataset.type
        const data = {
          filename: `my-${type}`
        }
        if (type === "csv") {
          data.columnDelimiter = ","
        }
        if (type === "csv") {
          exportCSV(datatable, data)
        } else if (type === "json") {
          exportJSON(datatable, data)
        } else if (type === "sql") {
          exportSQL(datatable, data)
        }

      })
    })
    document.querySelectorAll(".main").forEach(el => {
      el.addEventListener("click", _event => {
        datatable[el.id]()
        setTimeout(() => {
          document.getElementById("hide").classList.toggle("hidden", !datatable.initialized)
          table.classList.toggle("table", !datatable.initialized)
        }, 10)
      })
    })
    document.querySelectorAll(".import").forEach(el => {
      el.addEventListener("click", _event => {
        const type = el.dataset.type
        const data = {
          data: textarea.value
        }
        textarea.parentNode.classList.remove("error")
        if (!data.data.length) {
          textarea.parentNode.classList.add("error")
          return false
        }
        if (type === "csv") {
          const convertedData = convertCSV(data)
          datatable.insert(convertedData)
        } else if (type === "json") {
          const convertedData = convertJSON(data)
          datatable.insert(convertedData)
        }

      })
    })
  </script>
 <!-- [Page Specific JS] end -->
@endpush