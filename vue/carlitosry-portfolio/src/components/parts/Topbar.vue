<script setup lang="ts">
  const props = {
    socialNetworks: [
      { href: '#', alt: '', icon: '<svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="512" viewBox="0 0 24 24" width="512" class="svg replaced-svg"><path d="m15.997 3.985h2.191v-3.816c-.378-.052-1.678-.169-3.192-.169-6.932 0-5.046 7.85-5.322 9h-3.487v4.266h3.486v10.734h4.274v-10.733h3.345l.531-4.266h-3.877c.188-2.824-.761-5.016 2.051-5.016z" fill="#3b5999"></path></svg>'},
      { href: '#', alt: '', icon: '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" class="svg replaced-svg"> <path style="fill:#03A9F4;" d="M512,97.248c-19.04,8.352-39.328,13.888-60.48,16.576c21.76-12.992,38.368-33.408,46.176-58.016 c-20.288,12.096-42.688,20.64-66.56,25.408C411.872,60.704,384.416,48,354.464,48c-58.112,0-104.896,47.168-104.896,104.992 c0,8.32,0.704,16.32,2.432,23.936c-87.264-4.256-164.48-46.08-216.352-109.792c-9.056,15.712-14.368,33.696-14.368,53.056 c0,36.352,18.72,68.576,46.624,87.232c-16.864-0.32-33.408-5.216-47.424-12.928c0,0.32,0,0.736,0,1.152 c0,51.008,36.384,93.376,84.096,103.136c-8.544,2.336-17.856,3.456-27.52,3.456c-6.72,0-13.504-0.384-19.872-1.792 c13.6,41.568,52.192,72.128,98.08,73.12c-35.712,27.936-81.056,44.768-130.144,44.768c-8.608,0-16.864-0.384-25.12-1.44 C46.496,446.88,101.6,464,161.024,464c193.152,0,298.752-160,298.752-298.688c0-4.64-0.16-9.12-0.384-13.568 C480.224,136.96,497.728,118.496,512,97.248z"></path> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> </svg>'},
      { href: '#', alt: '', icon: '<svg xmlns="http://www.w3.org/2000/svg" height="512pt" viewBox="0 -77 512.00213 512" width="512pt" class="svg replaced-svg"> <path d="m501.453125 56.09375c-5.902344-21.933594-23.195313-39.222656-45.125-45.128906-40.066406-10.964844-200.332031-10.964844-200.332031-10.964844s-160.261719 0-200.328125 10.546875c-21.507813 5.902344-39.222657 23.617187-45.125 45.546875-10.542969 40.0625-10.542969 123.148438-10.542969 123.148438s0 83.503906 10.542969 123.148437c5.90625 21.929687 23.195312 39.222656 45.128906 45.128906 40.484375 10.964844 200.328125 10.964844 200.328125 10.964844s160.261719 0 200.328125-10.546875c21.933594-5.902344 39.222656-23.195312 45.128906-45.125 10.542969-40.066406 10.542969-123.148438 10.542969-123.148438s.421875-83.507812-10.546875-123.570312zm0 0" fill="#f00"></path> <path d="m204.96875 256 133.269531-76.757812-133.269531-76.757813zm0 0" fill="#fff"></path> </svg>'},
      { href: '#', alt: '', icon: '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" class="svg replaced-svg"> <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="-46.0041" y1="634.1208" x2="-32.9334" y2="647.1917" gradientTransform="matrix(32 0 0 -32 1519 20757)"> <stop offset="0" style="stop-color:#FFC107"></stop> <stop offset="0.507" style="stop-color:#F44336"></stop> <stop offset="0.99" style="stop-color:#9C27B0"></stop> </linearGradient> <path style="fill:url(#SVGID_1_);" d="M352,0H160C71.648,0,0,71.648,0,160v192c0,88.352,71.648,160,160,160h192 c88.352,0,160-71.648,160-160V160C512,71.648,440.352,0,352,0z M464,352c0,61.76-50.24,112-112,112H160c-61.76,0-112-50.24-112-112 V160C48,98.24,98.24,48,160,48h192c61.76,0,112,50.24,112,112V352z"></path> <linearGradient id="SVGID_2_" gradientUnits="userSpaceOnUse" x1="-42.2971" y1="637.8279" x2="-36.6404" y2="643.4846" gradientTransform="matrix(32 0 0 -32 1519 20757)"> <stop offset="0" style="stop-color:#FFC107"></stop> <stop offset="0.507" style="stop-color:#F44336"></stop> <stop offset="0.99" style="stop-color:#9C27B0"></stop> </linearGradient> <path style="fill:url(#SVGID_2_);" d="M256,128c-70.688,0-128,57.312-128,128s57.312,128,128,128s128-57.312,128-128 S326.688,128,256,128z M256,336c-44.096,0-80-35.904-80-80c0-44.128,35.904-80,80-80s80,35.872,80,80 C336,300.096,300.096,336,256,336z"></path> <linearGradient id="SVGID_3_" gradientUnits="userSpaceOnUse" x1="-35.5456" y1="644.5793" x2="-34.7919" y2="645.3331" gradientTransform="matrix(32 0 0 -32 1519 20757)"> <stop offset="0" style="stop-color:#FFC107"></stop> <stop offset="0.507" style="stop-color:#F44336"></stop> <stop offset="0.99" style="stop-color:#9C27B0"></stop> </linearGradient> <circle style="fill:url(#SVGID_3_);" cx="393.6" cy="118.4" r="17.056"></circle> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> </svg>'},
      { href: '#', alt: '', icon: '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" class="svg replaced-svg"> <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="-46.0041" y1="634.1208" x2="-32.9334" y2="647.1917" gradientTransform="matrix(32 0 0 -32 1519 20757)"> <stop offset="0" style="stop-color:#FFC107"></stop> <stop offset="0.507" style="stop-color:#F44336"></stop> <stop offset="0.99" style="stop-color:#9C27B0"></stop> </linearGradient> <path style="fill:url(#SVGID_1_);" d="M352,0H160C71.648,0,0,71.648,0,160v192c0,88.352,71.648,160,160,160h192 c88.352,0,160-71.648,160-160V160C512,71.648,440.352,0,352,0z M464,352c0,61.76-50.24,112-112,112H160c-61.76,0-112-50.24-112-112 V160C48,98.24,98.24,48,160,48h192c61.76,0,112,50.24,112,112V352z"></path> <linearGradient id="SVGID_2_" gradientUnits="userSpaceOnUse" x1="-42.2971" y1="637.8279" x2="-36.6404" y2="643.4846" gradientTransform="matrix(32 0 0 -32 1519 20757)"> <stop offset="0" style="stop-color:#FFC107"></stop> <stop offset="0.507" style="stop-color:#F44336"></stop> <stop offset="0.99" style="stop-color:#9C27B0"></stop> </linearGradient> <path style="fill:url(#SVGID_2_);" d="M256,128c-70.688,0-128,57.312-128,128s57.312,128,128,128s128-57.312,128-128 S326.688,128,256,128z M256,336c-44.096,0-80-35.904-80-80c0-44.128,35.904-80,80-80s80,35.872,80,80 C336,300.096,300.096,336,256,336z"></path> <linearGradient id="SVGID_3_" gradientUnits="userSpaceOnUse" x1="-35.5456" y1="644.5793" x2="-34.7919" y2="645.3331" gradientTransform="matrix(32 0 0 -32 1519 20757)"> <stop offset="0" style="stop-color:#FFC107"></stop> <stop offset="0.507" style="stop-color:#F44336"></stop> <stop offset="0.99" style="stop-color:#9C27B0"></stop> </linearGradient> <circle style="fill:url(#SVGID_3_);" cx="393.6" cy="118.4" r="17.056"></circle> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> </svg>'},
    ],
    cv: {
      href: '#',
      alt: 'Carlos Reyes CV',
    }
  }

</script>

<template>
  <div class="container">
    <div class="topbar_inner">
      <div class="logo">
      </div>
      <div class="right">
        <div class="social">
          <ul>
            <li v-for="item in props.socialNetworks" :key="item.icon">
              <a :href="item.href" :alt="item.alt">
                <span v-html="item.icon"></span>
              </a>
            </li>
          </ul>
        </div>
        <div class="iknow_tm_button">
          <a :href="props.cv.href" :download="props.cv.alt" :alt="props.cv.alt">Download CV</a>
        </div>
      </div>
    </div>
  </div>
</template>
