<!--====== gLightBox CSS ======-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox@3.1.0/dist/css/glightbox.min.css" />
<link rel="stylesheet" href="{{asset('css/admin/dash.css')}}" />

<x-admin-dashboard title='Dashboard' dashTitle='Dashboard'>
   <div class="content">
      <div class="container-fluid">
          <div>
              <div class="row">
                  <div class="col-md-6 col-xl-3">
                      <div class="card">
                          <!----><!---->
                          <div class="card-body">
                              <div>
                                  <div class="row">
                                      <div class="col-5">
                                          <div
                                              class="icon-big text-center icon-warning"
                                          >
                                              <i class="ti-server"></i>
                                          </div>
                                      </div>
                                      <div class="col-7">
                                          <div class="numbers">
                                              <p>Capacity</p>
                                              105GB
                                          </div>
                                      </div>
                                  </div>
                                  <div>
                                      <hr />
                                      <div class="stats">
                                          <i class="ti-reload"></i> Updated now
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <!---->
                      </div>
                  </div>
                  <div class="col-md-6 col-xl-3">
                      <div class="card">
                          <!----><!---->
                          <div class="card-body">
                              <div>
                                  <div class="row">
                                      <div class="col-5">
                                          <div
                                              class="icon-big text-center icon-success"
                                          >
                                              <i class="ti-wallet"></i>
                                          </div>
                                      </div>
                                      <div class="col-7">
                                          <div class="numbers">
                                              <p>Revenue</p>
                                              $1,345
                                          </div>
                                      </div>
                                  </div>
                                  <div>
                                      <hr />
                                      <div class="stats">
                                          <i class="ti-calendar"></i> Last day
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <!---->
                      </div>
                  </div>
                  <div class="col-md-6 col-xl-3">
                      <div class="card">
                          <!----><!---->
                          <div class="card-body">
                              <div>
                                  <div class="row">
                                      <div class="col-5">
                                          <div
                                              class="icon-big text-center icon-danger"
                                          >
                                              <i class="ti-pulse"></i>
                                          </div>
                                      </div>
                                      <div class="col-7">
                                          <div class="numbers">
                                              <p>Errors</p>
                                              23
                                          </div>
                                      </div>
                                  </div>
                                  <div>
                                      <hr />
                                      <div class="stats">
                                          <i class="ti-timer"></i> In the last
                                          hour
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <!---->
                      </div>
                  </div>
                  <div class="col-md-6 col-xl-3">
                      <div class="card">
                          <!----><!---->
                          <div class="card-body">
                              <div>
                                  <div class="row">
                                      <div class="col-5">
                                          <div
                                              class="icon-big text-center icon-info"
                                          >
                                              <i class="ti-twitter-alt"></i>
                                          </div>
                                      </div>
                                      <div class="col-7">
                                          <div class="numbers">
                                              <p>Followers</p>
                                              +45
                                          </div>
                                      </div>
                                  </div>
                                  <div>
                                      <hr />
                                      <div class="stats">
                                          <i class="ti-reload"></i> Updated now
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <!---->
                      </div>
                  </div>
              </div>
              <div class="row my-5">
                  <div class="col-12">
                      <div class="card">
                          <!---->
                          <div class="card-header">
                              <h4 class="card-title">Users behavior</h4>
                              <p class="card-category">24 Hours performance</p>
                          </div>
                          <div class="card-body">
                              <div>
                                  <div id="div_54313430262" class="ct-chart">
                                      <svg
                                          xmlns:ct="http://gionkunz.github.com/chartist-js/ct"
                                          width="100%"
                                          height="245px"
                                          class="ct-chart-line"
                                          style="width: 100%; height: 245px"
                                      >
                                          <g class="ct-grids">
                                              <line
                                                  y1="210"
                                                  y2="210"
                                                  x1="50"
                                                  x2="990.2000122070312"
                                                  class="ct-grid ct-vertical"
                                              ></line>
                                              <line
                                                  y1="171"
                                                  y2="171"
                                                  x1="50"
                                                  x2="990.2000122070312"
                                                  class="ct-grid ct-vertical"
                                              ></line>
                                              <line
                                                  y1="132"
                                                  y2="132"
                                                  x1="50"
                                                  x2="990.2000122070312"
                                                  class="ct-grid ct-vertical"
                                              ></line>
                                              <line
                                                  y1="93"
                                                  y2="93"
                                                  x1="50"
                                                  x2="990.2000122070312"
                                                  class="ct-grid ct-vertical"
                                              ></line>
                                              <line
                                                  y1="54"
                                                  y2="54"
                                                  x1="50"
                                                  x2="990.2000122070312"
                                                  class="ct-grid ct-vertical"
                                              ></line>
                                              <line
                                                  y1="15"
                                                  y2="15"
                                                  x1="50"
                                                  x2="990.2000122070312"
                                                  class="ct-grid ct-vertical"
                                              ></line>
                                          </g>
                                          <g>
                                              <g class="ct-series ct-series-a">
                                                  <path
                                                      d="M50,210L50,154.035C84.822,154.035,119.644,134.925,154.467,134.925C189.289,134.925,224.111,114.45,258.933,114.45C293.756,114.45,328.578,100.41,363.4,100.41C398.222,100.41,433.044,94.17,467.867,94.17C502.689,94.17,537.511,87.93,572.333,87.93C607.156,87.93,641.978,73.89,676.8,73.89C711.622,73.89,746.444,35.475,781.267,35.475C816.089,35.475,850.911,24.36,885.733,24.36L885.733,210Z"
                                                      class="ct-area"
                                                  ></path>
                                                  <path
                                                      d="M50,154.035C84.822,154.035,119.644,134.925,154.467,134.925C189.289,134.925,224.111,114.45,258.933,114.45C293.756,114.45,328.578,100.41,363.4,100.41C398.222,100.41,433.044,94.17,467.867,94.17C502.689,94.17,537.511,87.93,572.333,87.93C607.156,87.93,641.978,73.89,676.8,73.89C711.622,73.89,746.444,35.475,781.267,35.475C816.089,35.475,850.911,24.36,885.733,24.36"
                                                      class="ct-line"
                                                  ></path>
                                              </g>
                                              <g class="ct-series ct-series-b">
                                                  <path
                                                      d="M50,210L50,196.935C84.822,196.935,119.644,180.36,154.467,180.36C189.289,180.36,224.111,172.365,258.933,172.365C293.756,172.365,328.578,163.2,363.4,163.2C398.222,163.2,433.044,134.535,467.867,134.535C502.689,134.535,537.511,125.175,572.333,125.175C607.156,125.175,641.978,105.675,676.8,105.675C711.622,105.675,746.444,84.81,781.267,84.81C816.089,84.81,850.911,64.92,885.733,64.92L885.733,210Z"
                                                      class="ct-area"
                                                  ></path>
                                                  <path
                                                      d="M50,196.935C84.822,196.935,119.644,180.36,154.467,180.36C189.289,180.36,224.111,172.365,258.933,172.365C293.756,172.365,328.578,163.2,363.4,163.2C398.222,163.2,433.044,134.535,467.867,134.535C502.689,134.535,537.511,125.175,572.333,125.175C607.156,125.175,641.978,105.675,676.8,105.675C711.622,105.675,746.444,84.81,781.267,84.81C816.089,84.81,850.911,64.92,885.733,64.92"
                                                      class="ct-line"
                                                  ></path>
                                              </g>
                                              <g class="ct-series ct-series-c">
                                                  <path
                                                      d="M50,210L50,205.515C84.822,205.515,119.644,187.965,154.467,187.965C189.289,187.965,224.111,196.935,258.933,196.935C293.756,196.935,328.578,188.94,363.4,188.94C398.222,188.94,433.044,172.95,467.867,172.95C502.689,172.95,537.511,163.395,572.333,163.395C607.156,163.395,641.978,150.135,676.8,150.135C711.622,150.135,746.444,130.05,781.267,130.05C816.089,130.05,850.911,130.05,885.733,130.05L885.733,210Z"
                                                      class="ct-area"
                                                  ></path>
                                                  <path
                                                      d="M50,205.515C84.822,205.515,119.644,187.965,154.467,187.965C189.289,187.965,224.111,196.935,258.933,196.935C293.756,196.935,328.578,188.94,363.4,188.94C398.222,188.94,433.044,172.95,467.867,172.95C502.689,172.95,537.511,163.395,572.333,163.395C607.156,163.395,641.978,150.135,676.8,150.135C711.622,150.135,746.444,130.05,781.267,130.05C816.089,130.05,850.911,130.05,885.733,130.05"
                                                      class="ct-line"
                                                  ></path>
                                              </g>
                                          </g>
                                          <g class="ct-labels">
                                              <foreignObject
                                                  style="overflow: visible"
                                                  x="50"
                                                  y="215"
                                                  width="104.46666802300348"
                                                  height="20"
                                                  ><span
                                                      class="ct-label ct-horizontal ct-end"
                                                      xmlns="http://www.w3.org/2000/xmlns/"
                                                      style="
                                                          width: 104px;
                                                          height: 20px;
                                                      "
                                                      >9:00AM</span
                                                  ></foreignObject
                                              ><foreignObject
                                                  style="overflow: visible"
                                                  x="154.46666802300348"
                                                  y="215"
                                                  width="104.46666802300348"
                                                  height="20"
                                                  ><span
                                                      class="ct-label ct-horizontal ct-end"
                                                      xmlns="http://www.w3.org/2000/xmlns/"
                                                      style="
                                                          width: 104px;
                                                          height: 20px;
                                                      "
                                                      >12:00AM</span
                                                  ></foreignObject
                                              ><foreignObject
                                                  style="overflow: visible"
                                                  x="258.93333604600696"
                                                  y="215"
                                                  width="104.46666802300348"
                                                  height="20"
                                                  ><span
                                                      class="ct-label ct-horizontal ct-end"
                                                      xmlns="http://www.w3.org/2000/xmlns/"
                                                      style="
                                                          width: 104px;
                                                          height: 20px;
                                                      "
                                                      >3:00PM</span
                                                  ></foreignObject
                                              ><foreignObject
                                                  style="overflow: visible"
                                                  x="363.40000406901044"
                                                  y="215"
                                                  width="104.46666802300348"
                                                  height="20"
                                                  ><span
                                                      class="ct-label ct-horizontal ct-end"
                                                      xmlns="http://www.w3.org/2000/xmlns/"
                                                      style="
                                                          width: 104px;
                                                          height: 20px;
                                                      "
                                                      >6:00PM</span
                                                  ></foreignObject
                                              ><foreignObject
                                                  style="overflow: visible"
                                                  x="467.8666720920139"
                                                  y="215"
                                                  width="104.46666802300342"
                                                  height="20"
                                                  ><span
                                                      class="ct-label ct-horizontal ct-end"
                                                      xmlns="http://www.w3.org/2000/xmlns/"
                                                      style="
                                                          width: 104px;
                                                          height: 20px;
                                                      "
                                                      >9:00PM</span
                                                  ></foreignObject
                                              ><foreignObject
                                                  style="overflow: visible"
                                                  x="572.3333401150173"
                                                  y="215"
                                                  width="104.46666802300354"
                                                  height="20"
                                                  ><span
                                                      class="ct-label ct-horizontal ct-end"
                                                      xmlns="http://www.w3.org/2000/xmlns/"
                                                      style="
                                                          width: 104px;
                                                          height: 20px;
                                                      "
                                                      >12:00PM</span
                                                  ></foreignObject
                                              ><foreignObject
                                                  style="overflow: visible"
                                                  x="676.8000081380209"
                                                  y="215"
                                                  width="104.46666802300354"
                                                  height="20"
                                                  ><span
                                                      class="ct-label ct-horizontal ct-end"
                                                      xmlns="http://www.w3.org/2000/xmlns/"
                                                      style="
                                                          width: 104px;
                                                          height: 20px;
                                                      "
                                                      >3:00AM</span
                                                  ></foreignObject
                                              ><foreignObject
                                                  style="overflow: visible"
                                                  x="781.2666761610244"
                                                  y="215"
                                                  width="104.46666802300342"
                                                  height="20"
                                                  ><span
                                                      class="ct-label ct-horizontal ct-end"
                                                      xmlns="http://www.w3.org/2000/xmlns/"
                                                      style="
                                                          width: 104px;
                                                          height: 20px;
                                                      "
                                                      >6:00AM</span
                                                  ></foreignObject
                                              ><foreignObject
                                                  style="overflow: visible"
                                                  x="885.7333441840278"
                                                  y="215"
                                                  width="104.46666802300342"
                                                  height="20"
                                                  ><span
                                                      class="ct-label ct-horizontal ct-end"
                                                      xmlns="http://www.w3.org/2000/xmlns/"
                                                      style="
                                                          width: 104px;
                                                          height: 20px;
                                                      "
                                                  ></span></foreignObject
                                              ><foreignObject
                                                  style="overflow: visible"
                                                  y="171"
                                                  x="10"
                                                  height="39"
                                                  width="30"
                                                  ><span
                                                      class="ct-label ct-vertical ct-start"
                                                      xmlns="http://www.w3.org/2000/xmlns/"
                                                      style="
                                                          height: 39px;
                                                          width: 30px;
                                                      "
                                                      >0</span
                                                  ></foreignObject
                                              ><foreignObject
                                                  style="overflow: visible"
                                                  y="132"
                                                  x="10"
                                                  height="39"
                                                  width="30"
                                                  ><span
                                                      class="ct-label ct-vertical ct-start"
                                                      xmlns="http://www.w3.org/2000/xmlns/"
                                                      style="
                                                          height: 39px;
                                                          width: 30px;
                                                      "
                                                      >200</span
                                                  ></foreignObject
                                              ><foreignObject
                                                  style="overflow: visible"
                                                  y="93"
                                                  x="10"
                                                  height="39"
                                                  width="30"
                                                  ><span
                                                      class="ct-label ct-vertical ct-start"
                                                      xmlns="http://www.w3.org/2000/xmlns/"
                                                      style="
                                                          height: 39px;
                                                          width: 30px;
                                                      "
                                                      >400</span
                                                  ></foreignObject
                                              ><foreignObject
                                                  style="overflow: visible"
                                                  y="54"
                                                  x="10"
                                                  height="39"
                                                  width="30"
                                                  ><span
                                                      class="ct-label ct-vertical ct-start"
                                                      xmlns="http://www.w3.org/2000/xmlns/"
                                                      style="
                                                          height: 39px;
                                                          width: 30px;
                                                      "
                                                      >600</span
                                                  ></foreignObject
                                              ><foreignObject
                                                  style="overflow: visible"
                                                  y="15"
                                                  x="10"
                                                  height="39"
                                                  width="30"
                                                  ><span
                                                      class="ct-label ct-vertical ct-start"
                                                      xmlns="http://www.w3.org/2000/xmlns/"
                                                      style="
                                                          height: 39px;
                                                          width: 30px;
                                                      "
                                                      >800</span
                                                  ></foreignObject
                                              ><foreignObject
                                                  style="overflow: visible"
                                                  y="-15"
                                                  x="10"
                                                  height="30"
                                                  width="30"
                                                  ><span
                                                      class="ct-label ct-vertical ct-start"
                                                      xmlns="http://www.w3.org/2000/xmlns/"
                                                      style="
                                                          height: 30px;
                                                          width: 30px;
                                                      "
                                                      >1000</span
                                                  ></foreignObject
                                              >
                                          </g>
                                      </svg>
                                  </div>
                                  <div class="footer">
                                      <div class="chart-legend">
                                          <div>
                                              <i
                                                  class="fa fa-circle text-info"
                                              ></i>
                                              Open
                                              <i
                                                  class="fa fa-circle text-danger"
                                              ></i>
                                              Click
                                              <i
                                                  class="fa fa-circle text-warning"
                                              ></i>
                                              Click Second Time
                                          </div>
                                      </div>
                                      <hr />
                                      <div class="stats">
                                          <span
                                              ><i class="ti-reload"></i> Updated 3
                                              minutes ago
                                          </span>
                                      </div>
                                      <div class="pull-right"></div>
                                  </div>
                              </div>
                          </div>
                          <!---->
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  

</x-admin-dashboard>