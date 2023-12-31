<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- styleSheets -->
    <link
      rel="stylesheet"
      href="../../../public/build/bootstrap-5.3.2-dist/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="../libs/css/globalStyle.css" />

    <!-- scripts -->
    <script
      type="text/javascript"
      src="../build/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"
      defer
    ></script>
    <script
      type="text/javascript"
      src="../libs/js/globalScript.js"
      defer
    ></script>
    <script
      type="text/javascript"
      src="../libs/js/indexScript.js"
      defer
    ></script>
    <title>UII-home</title>
  </head>
  <body class="bg-light">
    <!-- header / navbars -->
    <header>
      <!-- <nav class="navbar bg-white col-12 d-lg-none px-4">
        <div class="border-gradient d-flex p-1 shadow-sm rounded-3">
          <div class="bg-white px-2 rounded-1">
            <p class="m-auto">
              <span class="text-solid-blue navbar-icon">UII</span
              ><span class="text-solid-yellow">Your</span
              ><span class="text-solid-green">work</span
              ><span class="text-solid-blue">Partner</span>
            </p>
          </div>
        </div>
        <div class="d-flex align-items-center">
          <button
            class="navbar-toggler bg-dark"
            type="button"
            data-bs-toggle="offcanvas"
            data-bs-target="#sideNavbar"
            aria-controls="sideNavbarOffcanvas"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </nav> -->
      <nav
        class="offcanvas offcanvas-start d-lg-block bg-white border-0 rounded py-2 side-navbar"
        tabindex="-1"
        id="sideNavbar"
        aria-labelledby="SideNavbarLabel"
        data-mdb-backdrop="false"
      >
        <!-- navbar header -->
        <div class="container logo">
          <!-- UII brand logo -->
          <div class="border-gradient d-flex p-1 p-lg-2 shadow rounded-3">
            <div class="bg-white d-flex w-100 justify-content-center rounded-1">
              <p class="m-auto">
                <span class="text-solid-blue navbar-icon">UII</span
                ><span class="text-solid-yellow">Your</span
                ><span class="text-solid-green">work</span
                ><span class="text-solid-blue">Partner</span>
              </p>
            </div>
          </div>
        </div>
        <!-- navbar buttons  -->
        <div class="container pt-2 position-relative">
          <!-- sideNavbarButton -->
          <a
            href="index.html"
            class="btn mt-3 side-navbar-button current-page-button d-flex p-0 rounded"
          >
            <div class="col-12">
              <div class="d-flex align-items-center">
                <div class="p-2 rounded">
                  <span class="navbar-icon">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="16"
                      height="16"
                      fill="currentColor"
                      class="bi bi-speedometer"
                      viewBox="0 0 16 16"
                    >
                      <path
                        d="M8 2a.5.5 0 0 1 .5.5V4a.5.5 0 0 1-1 0V2.5A.5.5 0 0 1 8 2zM3.732 3.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 8a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 7.31A.91.91 0 1 0 8.85 8.569l3.434-4.297a.389.389 0 0 0-.029-.518z"
                      />
                      <path
                        fill-rule="evenodd"
                        d="M6.664 15.889A8 8 0 1 1 9.336.11a8 8 0 0 1-2.672 15.78zm-4.665-4.283A11.945 11.945 0 0 1 8 10c2.186 0 4.236.585 6.001 1.606a7 7 0 1 0-12.002 0z"
                      />
                    </svg>
                  </span>
                </div>
                <span class="ps-3 fs-5 d-flex"> Dashboard </span>
              </div>
            </div>
          </a>

          <!-- sideNavbarButton -->
          <a
            href="activities.html"
            class="btn mt-3 side-navbar-button d-flex p-0 rounded"
          >
            <div class="col-12">
              <div class="d-flex align-items-center">
                <div class="p-2 rounded shadow">
                  <span class="navbar-icon">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="16"
                      height="16"
                      fill="currentColor"
                      class="bi bi-collection-fill"
                      viewBox="0 0 16 16"
                    >
                      <path
                        d="M0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6v7zM2 3a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1h-11A.5.5 0 0 0 2 3zm2-2a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 0-1h-7A.5.5 0 0 0 4 1z"
                      />
                    </svg>
                  </span>
                </div>
                <span class="ps-3 fs-5 d-flex"> Activities </span>
              </div>
            </div>
          </a>

          <!-- sideNavbarButton -->
          <a
            href="intore.html"
            class="btn mt-3 side-navbar-button d-flex p-0 rounded"
          >
            <div class="col-12">
              <div class="d-flex align-items-center">
                <div class="p-2 rounded shadow">
                  <span class="navbar-icon">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="16"
                      height="16"
                      fill="currentColor"
                      class="bi bi-people-fill"
                      viewBox="0 0 16 16"
                    >
                      <path
                        d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"
                      />
                    </svg>
                  </span>
                </div>
                <span class="ps-3 fs-5 d-flex"> Intore </span>
              </div>
            </div>
          </a>

          <!-- sideNavbarButton -->
          <a
            href="calendar.html"
            class="btn mt-3 side-navbar-button d-flex p-0 rounded"
          >
            <div class="col-12">
              <div class="d-flex align-items-center">
                <div class="p-2 rounded shadow">
                  <span class="navbar-icon">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="16"
                      height="16"
                      fill="currentColor"
                      class="bi bi-calendar-week-fill"
                      viewBox="0 0 16 16"
                    >
                      <path
                        d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zM9.5 7h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5zm3 0h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5zM2 10.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3.5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5z"
                      />
                    </svg>
                  </span>
                </div>
                <span class="ps-3 fs-5 d-flex"> Calendar </span>
              </div>
            </div>
          </a>

          <!-- sideNavbarButton -->
          <a
            href="reports.html"
            class="btn mt-3 side-navbar-button d-flex p-0 rounded"
          >
            <div class="col-12">
              <div class="d-flex align-items-center">
                <div class="p-2 rounded shadow">
                  <span class="navbar-icon">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="16"
                      height="16"
                      fill="currentColor"
                      class="bi bi-file-earmark-fill"
                      viewBox="0 0 16 16"
                    >
                      <path
                        d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm5.5 1.5v2a1 1 0 0 0 1 1h2l-3-3z"
                      />
                    </svg>
                  </span>
                </div>
                <span class="ps-3 fs-5 d-flex"> Reports </span>
              </div>
            </div>
          </a>

          <!-- sideNavbarButton -->
          <a
            href="settings"
            class="btn mt-3 side-navbar-button d-flex p-0 rounded"
          >
            <div class="col-12">
              <div class="d-flex align-items-center">
                <div class="p-2 rounded shadow">
                  <span class="navbar-icon">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="16"
                      height="16"
                      fill="currentColor"
                      class="bi bi-gear-fill"
                      viewBox="0 0 16 16"
                    >
                      <path
                        d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"
                      />
                    </svg>
                  </span>
                </div>
                <span class="ps-3 fs-5 d-flex"> Settings </span>
              </div>
            </div>
          </a>
        </div>
        <!-- navbar footer -->
        <div class="container position-absolute bottom-0 mb-2">
          <div class="position-relative bg-gradient-1 rounded">
            <!-- <div
              class="help-header py-1 px-4 rounded bg-solid-yellow position-absolute start-50 translate-middle"
            >
              <p class="text-white fs-5 m-0">Help</p>
            </div> -->
            <div class="text-center px-4 px-lg-5 pt-4 pb-4">
              <p class="text-white mb-0 mt-3">Contact the support team</p>
            </div>
          </div>
        </div>
      </nav>
    </header>
    <!-- main -->
    <main class="px-3">
      <!-- top navbar -->
      <nav class="navbar navbar-expand-lg bg-white rounded py-1 mt-2">
        <div class="container-fluid p-1">
          <div class="col-1 col-lg-2">
            <button
              class="navbar-toggler bg-none p-0 border-0"
              type="button"
              data-bs-toggle="offcanvas"
              data-bs-target="#sideNavbar"
              aria-controls="sideNavbarOffcanvas"
            >
              <span class="">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="36"
                  height="36"
                  fill="currentColor"
                  class="bi bi-list"
                  viewBox="0 0 16 16"
                >
                  <path
                    fill-rule="evenodd"
                    d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"
                  />
                </svg>
              </span>
            </button>
            <div class="d-none d-lg-block">
              <span class="navbar-icon">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="16"
                  height="16"
                  fill="currentColor"
                  class="bi bi-list"
                  viewBox="0 0 16 16"
                >
                  <path
                    fill-rule="evenodd"
                    d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"
                  />
                </svg>
              </span>
              <span class="">Home</span>
            </div>
          </div>
          <div class="col-9 col-lg-7">
            <form class="container-fluid pe-1">
              <div class="input-group">
                <span class="input-group-text" id="basic-addon1">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    class="bi bi-search"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"
                    />
                  </svg>
                </span>
                <input
                  type="text"
                  class="form-control"
                  placeholder="Quick search"
                  aria-label="Quick search"
                  aria-describedby="basic-addon1"
                />
              </div>
            </form>
          </div>
          <div class="col-2 col-lg-3">
            <div class="d-flex justify-content-end">
              <div class="px-lg-1">
                <img
                  src="../dipository/profilePictures/9334183.jpg"
                  class="profile-picture rounded-circle"
                  alt="profile picture"
                />
              </div>
              <div class="d-none d-lg-block">
                <p class="m-0">Ndayishimiye</p>
                <p class="m-0">Emile</p>
              </div>
            </div>
          </div>
        </div>
      </nav>
      <!-- urugerero identifier section -->
      <section class="mt-3 rounded d-flex justify-content-between align-items-center">
        <p class="m-0 fw-light">Inkomezabogwi ikiciro cya 11 / <span>Kimisagara</span></p>
        <button class="btn btn-sm btn-info border-0 shadow-sm bg-light-green">+Activity</button>
      </section>
      <section class="mt-3 rounded bg-white">
        <div class="card border-0">
          <div class="card-header border-0 bg-white p-3">
            <div class="d-flex align-items-center">
              <!-- number of entries per page -->
              <select
                name=""
                class="border border-1 bg-white text-center outline-none select-arrow-none"
              >
                <option value="50">50</option>
                <option value="100">100</option>
                <option value="200">200</option>
                <option value="400">400</option>
              </select>
              <!-- by location/group doers filter -->
              <select
                name=""
                class="border border-1 bg-white mx-2 text-center outline-none select-arrow-none"
              >
                <option value="Sector">Sector</option>
                <option value="Kamuhoza">Kamuhoza</option>
                <option value="Katabaro">Katabaro</option>
                <option value="Kimisagara">Kimisagara</option>
              </select>
              <!-- activity category filters -->
              <select
                name=""
                class="border border-1 bg-white text-center outline-none select-arrow-none"
              >
                <option value="survey">Survey</option>
                <option value="Katabaro">Training</option>
                <option value="construction">Construction</option>
              </select>
              <!-- number of available records -->
              <span class="d-none d-md-block me-3 ms-auto"
                ><small>50</small> of <small>100</small></span
              >
              <!-- activity due date filters -->
              <div
                class="border border-1 bg-white mx-2 text-center"
              >
                <select
                  name=""
                  class="border border-start-0 border-bottom-0 border-top-0 text-center select-arrow-none outline-none px-2 border-1 h-100 bg-white"
                >
                  <option value="On">On</option>
                  <option value="Before">Before</option>
                  <option value="After">After</option>
                </select>
                <input type="date" class="gs-fs-8 outline-none border border-0" />
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="border border-1">
              <!-- activity -->
              <div class="row g-0 border-bottom border-1">
                <div class="col-3 p-1 p-md-2">
                  <img
                    class="w-100 rounded-start"
                    height="130px"
                    src="../dipository/pictures/Activities/WhatsApp Image 2023-11-02 at 12.21.02.jpeg"
                    alt="activity image"
                  />
                </div>
                <div class="col-7 col-md-8 p-2">
                  <p class="m-0">
                    <span class="fw-bolder">Team</span>
                    <small>kimisagara, Isimbi</small>
                  </p>
                  <p class="m-0">
                    <span class="fw-bolder">Location</span>
                    <small>Kimisagara, Katabaro</small>
                  </p>
                  <p class="m-0">
                    <span class="fw-bolder">Activity</span>
                    <small
                      >Intore zubatse umuhanda ungana na kirometero
                      eshanu</small
                    >
                  </p>
                  <p class="m-0">
                    <span class="fw-bolder">Attendees</span> <small>100</small>
                  </p>
                </div>
                <div
                  class="col-2 col-md-1 p-md-2 d-flex flex-column justify-content-evenly align-items-center"
                >
                  <span class="gs-fs-7 d-block">Sept 2</span>
                  <div
                    class="btn-group-vertical"
                    role="group"
                    aria-label="Basic"
                  >
                    <!-- edit activity details data -->
                    <button type="button" class="btn btn-sm btn-outline-warning">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="16"
                        fill="currentColor"
                        class="bi bi-pencil-square"
                        viewBox="0 0 16 16"
                      >
                        <path
                          d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"
                        />
                        <path
                          fill-rule="evenodd"
                          d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"
                        />
                      </svg>
                    </button>
                    <!-- delete activity -->
                    <button type="button" class="btn btn-sm btn-outline-info">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="16"
                        fill="currentColor"
                        class="bi bi-trash3-fill"
                        viewBox="0 0 16 16"
                      >
                        <path
                          d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"
                        />
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
              <!-- activity -->
              <div class="row g-0 border-bottom border-1">
                <div class="col-3 p-1 p-md-2">
                  <img
                    class="w-100 rounded-start"
                    height="130px"
                    src="../dipository/pictures/Activities/WhatsApp Image 2023-11-02 at 12.21.02.jpeg"
                    alt="activity image"
                  />
                </div>
                <div class="col-7 col-md-8 p-2">
                  <p class="m-0">
                    <span class="fw-bolder">Team</span>
                    <small>kimisagara, Isimbi</small>
                  </p>
                  <p class="m-0">
                    <span class="fw-bolder">Location</span>
                    <small>Kimisagara, Katabaro</small>
                  </p>
                  <p class="m-0">
                    <span class="fw-bolder">Activity</span>
                    <small
                      >Intore zubatse umuhanda ungana na kirometero
                      eshanu</small
                    >
                  </p>
                  <p class="m-0">
                    <span class="fw-bolder">Attendees</span> <small>100</small>
                  </p>
                </div>
                <div
                  class="col-2 col-md-1 p-md-2 d-flex flex-column justify-content-evenly align-items-center"
                >
                  <span class="gs-fs-7 d-block">Sept 2</span>
                  <div
                    class="btn-group-vertical"
                    role="group"
                    aria-label="Basic"
                  >
                    <!-- edit activity details data -->
                    <button type="button" class="btn btn-sm btn-outline-warning">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="16"
                        fill="currentColor"
                        class="bi bi-pencil-square"
                        viewBox="0 0 16 16"
                      >
                        <path
                          d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"
                        />
                        <path
                          fill-rule="evenodd"
                          d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"
                        />
                      </svg>
                    </button>
                    <!-- delete activity -->
                    <button type="button" class="btn btn-sm btn-outline-info">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="16"
                        fill="currentColor"
                        class="bi bi-trash3-fill"
                        viewBox="0 0 16 16"
                      >
                        <path
                          d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"
                        />
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
              <!-- activity -->
              <div class="row g-0 border-bottom border-1">
                <div class="col-3 p-1 p-md-2">
                  <img
                    class="w-100 rounded-start"
                    height="130px"
                    src="../dipository/pictures/Activities/WhatsApp Image 2023-11-02 at 12.21.02.jpeg"
                    alt="activity image"
                  />
                </div>
                <div class="col-7 col-md-8 p-2">
                  <p class="m-0">
                    <span class="fw-bolder">Team</span>
                    <small>kimisagara, Isimbi</small>
                  </p>
                  <p class="m-0">
                    <span class="fw-bolder">Location</span>
                    <small>Kimisagara, Katabaro</small>
                  </p>
                  <p class="m-0">
                    <span class="fw-bolder">Activity</span>
                    <small
                      >Intore zubatse umuhanda ungana na kirometero
                      eshanu</small
                    >
                  </p>
                  <p class="m-0">
                    <span class="fw-bolder">Attendees</span> <small>100</small>
                  </p>
                </div>
                <div
                  class="col-2 col-md-1 p-md-2 d-flex flex-column justify-content-evenly align-items-center"
                >
                  <span class="gs-fs-7 d-block">Sept 2</span>
                  <div
                    class="btn-group-vertical"
                    role="group"
                    aria-label="Basic"
                  >
                    <!-- edit activity details data -->
                    <button type="button" class="btn btn-sm btn-outline-warning">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="16"
                        fill="currentColor"
                        class="bi bi-pencil-square"
                        viewBox="0 0 16 16"
                      >
                        <path
                          d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"
                        />
                        <path
                          fill-rule="evenodd"
                          d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"
                        />
                      </svg>
                    </button>
                    <!-- delete activity -->
                    <button type="button" class="btn btn-sm btn-outline-info">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="16"
                        fill="currentColor"
                        class="bi bi-trash3-fill"
                        viewBox="0 0 16 16"
                      >
                        <path
                          d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"
                        />
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </section>
    </main>
    <!-- footer -->
    <footer></footer>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</html>
