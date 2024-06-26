@props(['name'])


@if ($name === 'sendEmail')
<div      
{!! $attributes->merge(['class' => 'rounded-full p-1 text-red-600 hover:bg-red-600 hover:text-white transition-colors duration-300']) !!} >
<svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24"><path fill="currentColor" d="M13 19c0-3.31 2.69-6 6-6c1.1 0 2.12.3 3 .81V6a2 2 0 0 0-2-2H4c-1.11 0-2 .89-2 2v12a2 2 0 0 0 2 2h9.09c-.05-.33-.09-.66-.09-1M4 8V6l8 5l8-5v2l-8 5zm16 14v-2h-4v-2h4v-2l3 3z"/></svg>
</div>
@elseif ($name === 'xMark')

<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6.758 17.243L12.001 12m5.243-5.243L12 12m0 0L6.758 6.757M12.001 12l5.243 5.243"/></svg>
@elseif ($name === 'basket')

<svg xmlns="http://www.w3.org/2000/svg" idth="30" height="30" viewBox="0 0 24 24">
    <path fill="currentColor" d="M17 18a2 2 0 0 1 2 2a2 2 0 0 1-2 2a2 2 0 0 1-2-2c0-1.11.89-2 2-2M1 2h3.27l.94 2H20a1 1 0 0 1 1 1c0 .17-.05.34-.12.5l-3.58 6.47c-.34.61-1 1.03-1.75 1.03H8.1l-.9 1.63l-.03.12a.25.25 0 0 0 .25.25H19v2H7a2 2 0 0 1-2-2c0-.35.09-.68.24-.96l1.36-2.45L3 4H1zm6 16a2 2 0 0 1 2 2a2 2 0 0 1-2 2a2 2 0 0 1-2-2c0-1.11.89-2 2-2m9-7l2.78-5H6.14l2.36 5z"/>
</svg>

@elseif ($name === 'usersS')
<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" class = "object-scale-down transition duration-500">
                            <path strokeLinecap="round" strokeLinejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                        </svg>
@elseif ($name === 'x')

<svg xmlns="http://www.w3.org/2000/svg"
      width="1em"
      height="1em"
      viewBox="0 0 24 24"
      stroke-width="0"
      fill="currentColor"
      stroke="currentColor">
      <path
        d="M8 2H1L9.26086 13.0145L1.44995 21.9999H4.09998L10.4883 14.651L16 22H23L14.3917 10.5223L21.8001 2H19.1501L13.1643 8.88578L8 2ZM17 20L5 4H7L19 20H17Z"
      ></path>
    </svg>

@elseif ($name === 'facebook')

<svg
      xmlns="http://www.w3.org/2000/svg"
      width="1em"
      height="1.1em"
      viewBox="0 0 448 512"
      stroke-width="0"
      fill="currentColor"
      stroke="currentColor"
      class="w-5"
    >
      <path
        d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h137.25V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.27c-30.81 0-40.42 19.12-40.42 38.73V256h68.78l-11 71.69h-57.78V480H400a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48z"
      ></path>
    </svg>
@elseif ($name === 'inst')
    <svg
      xmlns="http://www.w3.org/2000/svg"
      width="1em"
      height="1.2em"
      viewBox="0 0 24 24"
      stroke-width="1"
      fill="currentColor"
      stroke="currentColor"
      class="w-5"
    >
      <path
        d="M12.001 9C10.3436 9 9.00098 10.3431 9.00098 12C9.00098 13.6573 10.3441 15 12.001 15C13.6583 15 15.001 13.6569 15.001 12C15.001 10.3427 13.6579 9 12.001 9ZM12.001 7C14.7614 7 17.001 9.2371 17.001 12C17.001 14.7605 14.7639 17 12.001 17C9.24051 17 7.00098 14.7629 7.00098 12C7.00098 9.23953 9.23808 7 12.001 7ZM18.501 6.74915C18.501 7.43926 17.9402 7.99917 17.251 7.99917C16.5609 7.99917 16.001 7.4384 16.001 6.74915C16.001 6.0599 16.5617 5.5 17.251 5.5C17.9393 5.49913 18.501 6.0599 18.501 6.74915ZM12.001 4C9.5265 4 9.12318 4.00655 7.97227 4.0578C7.18815 4.09461 6.66253 4.20007 6.17416 4.38967C5.74016 4.55799 5.42709 4.75898 5.09352 5.09255C4.75867 5.4274 4.55804 5.73963 4.3904 6.17383C4.20036 6.66332 4.09493 7.18811 4.05878 7.97115C4.00703 9.0752 4.00098 9.46105 4.00098 12C4.00098 14.4745 4.00753 14.8778 4.05877 16.0286C4.0956 16.8124 4.2012 17.3388 4.39034 17.826C4.5591 18.2606 4.7605 18.5744 5.09246 18.9064C5.42863 19.2421 5.74179 19.4434 6.17187 19.6094C6.66619 19.8005 7.19148 19.9061 7.97212 19.9422C9.07618 19.9939 9.46203 20 12.001 20C14.4755 20 14.8788 19.9934 16.0296 19.9422C16.8117 19.9055 17.3385 19.7996 17.827 19.6106C18.2604 19.4423 18.5752 19.2402 18.9074 18.9085C19.2436 18.5718 19.4445 18.2594 19.6107 17.8283C19.8013 17.3358 19.9071 16.8098 19.9432 16.0289C19.9949 14.9248 20.001 14.5389 20.001 12C20.001 9.52552 19.9944 9.12221 19.9432 7.97137C19.9064 7.18906 19.8005 6.66149 19.6113 6.17318C19.4434 5.74038 19.2417 5.42635 18.9084 5.09255C18.573 4.75715 18.2616 4.55693 17.8271 4.38942C17.338 4.19954 16.8124 4.09396 16.0298 4.05781C14.9258 4.00605 14.5399 4 12.001 4ZM12.001 2C14.7176 2 15.0568 2.01 16.1235 2.06C17.1876 2.10917 17.9135 2.2775 18.551 2.525C19.2101 2.77917 19.7668 3.1225 20.3226 3.67833C20.8776 4.23417 21.221 4.7925 21.476 5.45C21.7226 6.08667 21.891 6.81333 21.941 7.8775C21.9885 8.94417 22.001 9.28333 22.001 12C22.001 14.7167 21.991 15.0558 21.941 16.1225C21.8918 17.1867 21.7226 17.9125 21.476 18.55C21.2218 19.2092 20.8776 19.7658 20.3226 20.3217C19.7668 20.8767 19.2076 21.22 18.551 21.475C17.9135 21.7217 17.1876 21.89 16.1235 21.94C15.0568 21.9875 14.7176 22 12.001 22C9.28431 22 8.94514 21.99 7.87848 21.94C6.81431 21.8908 6.08931 21.7217 5.45098 21.475C4.79264 21.2208 4.23514 20.8767 3.67931 20.3217C3.12348 19.7658 2.78098 19.2067 2.52598 18.55C2.27848 17.9125 2.11098 17.1867 2.06098 16.1225C2.01348 15.0558 2.00098 14.7167 2.00098 12C2.00098 9.28333 2.01098 8.94417 2.06098 7.8775C2.11014 6.8125 2.27848 6.0875 2.52598 5.45C2.78014 4.79167 3.12348 4.23417 3.67931 3.67833C4.23514 3.1225 4.79348 2.78 5.45098 2.525C6.08848 2.2775 6.81348 2.11 7.87848 2.06C8.94514 2.0125 9.28431 2 12.001 2Z"
      ></path>
    </svg>
   

@elseif ($name === 'linkedIn')

<svg
                xmlns="http://www.w3.org/2000/svg"
                width="1em"
                height="1.1em"
                viewBox="0 0 512 512"
                stroke-width="0"
                fill="currentColor"
                stroke="currentColor"
                class="w-5 h-5"
                >
                <path
                    d="M444.17 32H70.28C49.85 32 32 46.7 32 66.89v374.72C32 461.91 49.85 480 70.28 480h373.78c20.54 0 35.94-18.21 35.94-38.39V66.89C480.12 46.7 464.6 32 444.17 32zm-273.3 373.43h-64.18V205.88h64.18zM141 175.54h-.46c-20.54 0-33.84-15.29-33.84-34.43 0-19.49 13.65-34.42 34.65-34.42s33.85 14.82 34.31 34.42c-.01 19.14-13.31 34.43-34.66 34.43zm264.43 229.89h-64.18V296.32c0-26.14-9.34-44-32.56-44-17.74 0-28.24 12-32.91 23.69-1.75 4.2-2.22 9.92-2.22 15.76v113.66h-64.18V205.88h64.18v27.77c9.34-13.3 23.93-32.44 57.88-32.44 42.13 0 74 27.77 74 87.64z"
                ></path>
                </svg>
@elseif ($name === 'like')
<div      
{!! $attributes->merge(['class' => '']) !!} >
<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 48 48">
    <path fill="currentColor" d="M34 9c-4.2 0-7.9 2.1-10 5.4C21.9 11.1 18.2 9 14 9C7.4 9 2 14.4 2 21c0 11.9 22 24 22 24s22-12 22-24c0-6.6-5.4-12-12-12"/>
</svg></div>
@elseif ($name === 'home')
<div      
{!! $attributes->merge(['class' => '']) !!} >
        <svg width="25" height="25" viewBox="0 0 40 35" fill="none" xmlns="http://www.w3.org/2000/svg" class="">
            <path d="M20.4344 6.92344C20.3181 6.82608 20.1633 6.77174 20.0023 6.77174C19.8414 6.77174 19.6866 6.82608 19.5703 6.92344L5.1875 18.9458C5.12642 18.9969 5.07782 19.0584 5.04466 19.1264C5.01149 19.1944 4.99444 19.2676 4.99453 19.3416L4.99219 30.625C4.99219 31.2052 5.25558 31.7616 5.72442 32.1718C6.19326 32.582 6.82915 32.8125 7.49219 32.8125H15C15.3315 32.8125 15.6495 32.6973 15.8839 32.4922C16.1183 32.287 16.25 32.0088 16.25 31.7188V22.4219C16.25 22.2768 16.3158 22.1377 16.4331 22.0352C16.5503 21.9326 16.7092 21.875 16.875 21.875H23.125C23.2908 21.875 23.4497 21.9326 23.5669 22.0352C23.6842 22.1377 23.75 22.2768 23.75 22.4219V31.7188C23.75 32.0088 23.8817 32.287 24.1161 32.4922C24.3505 32.6973 24.6685 32.8125 25 32.8125H32.5047C33.1677 32.8125 33.8036 32.582 34.2725 32.1718C34.7413 31.7616 35.0047 31.2052 35.0047 30.625V19.3416C35.0048 19.2676 34.9877 19.1944 34.9546 19.1264C34.9214 19.0584 34.8728 18.9969 34.8117 18.9458L20.4344 6.92344Z" fill="currentColor"/>
            <path d="M38.3524 16.6899L32.5086 11.7981V4.375C32.5086 4.08492 32.3769 3.80672 32.1425 3.6016C31.9081 3.39648 31.5901 3.28125 31.2586 3.28125H27.5086C27.1771 3.28125 26.8592 3.39648 26.6247 3.6016C26.3903 3.80672 26.2586 4.08492 26.2586 4.375V6.5625L21.7336 2.77676C21.3102 2.40215 20.6805 2.1875 20 2.1875C19.3219 2.1875 18.6938 2.40215 18.2703 2.77744L1.65315 16.6886C1.16722 17.0987 1.10628 17.7734 1.54847 18.2178C1.65951 18.3299 1.79547 18.4211 1.94808 18.4859C2.10068 18.5506 2.26674 18.5875 2.43615 18.5942C2.60556 18.601 2.77478 18.5776 2.9335 18.5253C3.09222 18.473 3.23713 18.3931 3.3594 18.2902L19.5703 4.73594C19.6867 4.63858 19.8414 4.58424 20.0024 4.58424C20.1633 4.58424 20.3181 4.63858 20.4344 4.73594L36.6469 18.2902C36.8857 18.4906 37.2056 18.6 37.5364 18.5944C37.8673 18.5887 38.182 18.4685 38.4117 18.2602C38.8914 17.8254 38.8516 17.1076 38.3524 16.6899Z" fill="currentColor"/>
        </svg>
</div>
@elseif ($name === 'message')
<div      
{!! $attributes->merge(['class' => '']) !!} >
    <svg width="25" height="25" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M36.1054 13.2188C35.229 11.1271 33.9541 9.22585 32.3515 7.6211C30.7538 6.01355 28.8559 4.73545 26.7656 3.85938C24.6242 2.95755 22.3235 2.49527 20 2.5H19.9219C17.5586 2.51172 15.2734 2.98047 13.1211 3.90235C11.0487 4.7874 9.16861 6.06777 7.58592 7.67188C5.99893 9.27302 4.73854 11.1676 3.87498 13.25C2.97855 15.4155 2.52433 17.7384 2.53904 20.082C2.55076 22.793 3.1992 25.4844 4.41014 27.8906V33.8281C4.41014 34.8203 5.21482 35.625 6.20311 35.625H12.1328C14.5503 36.8449 17.218 37.4867 19.9258 37.5H20.0078C22.3437 37.5 24.6054 37.0469 26.7383 36.1602C28.818 35.2945 30.7088 34.0313 32.3047 32.4414C33.914 30.8438 35.1797 28.9766 36.0664 26.8945C36.9844 24.7383 37.4531 22.4453 37.4648 20.0781C37.4726 17.6992 37.0117 15.3906 36.1054 13.2188ZM12.2031 21.875C11.1719 21.875 10.332 21.0352 10.332 20C10.332 18.9648 11.1719 18.125 12.2031 18.125C13.2344 18.125 14.0742 18.9648 14.0742 20C14.0742 21.0352 13.2383 21.875 12.2031 21.875ZM20 21.875C18.9687 21.875 18.1289 21.0352 18.1289 20C18.1289 18.9648 18.9687 18.125 20 18.125C21.0312 18.125 21.8711 18.9648 21.8711 20C21.8711 21.0352 21.0312 21.875 20 21.875ZM27.7969 21.875C26.7656 21.875 25.9258 21.0352 25.9258 20C25.9258 18.9648 26.7656 18.125 27.7969 18.125C28.8281 18.125 29.6679 18.9648 29.6679 20C29.6679 21.0352 28.8281 21.875 27.7969 21.875Z" fill="currentColor"/>
    </svg>
</div>
@elseif ($name === 'notif')
<div      
{!! $attributes->merge(['class' => '']) !!} >
    <svg width="25" height="25" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g clip-path="url(#clip0_125_17)">
            <path d="M32.85 28.13L32.51 27.83C31.5455 26.9706 30.7012 25.9851 30 24.9C29.2343 23.4025 28.7753 21.7672 28.65 20.09V15.15C28.6567 12.5156 27.7011 9.96948 25.9628 7.98997C24.2245 6.01047 21.8232 4.73386 19.21 4.4V3.11C19.21 2.75594 19.0694 2.41638 18.819 2.16601C18.5687 1.91565 18.2291 1.775 17.875 1.775C17.521 1.775 17.1814 1.91565 16.9311 2.16601C16.6807 2.41638 16.54 2.75594 16.54 3.11V4.42C13.9503 4.77793 11.578 6.06226 9.86258 8.03511C8.14713 10.008 7.20478 12.5356 7.21005 15.15V20.09C7.0848 21.7672 6.62583 23.4025 5.86005 24.9C5.17093 25.9824 4.34024 26.9677 3.39005 27.83L3.05005 28.13V30.95H32.85V28.13Z" fill="currentColor"/>
            <path d="M15.3199 32C15.4076 32.6339 15.7217 33.2146 16.2042 33.635C16.6867 34.0553 17.305 34.2869 17.9449 34.2869C18.5849 34.2869 19.2032 34.0553 19.6857 33.635C20.1682 33.2146 20.4823 32.6339 20.5699 32H15.3199Z" fill="black"/>
        </g>
        <defs>
            <clipPath id="clip0_125_17">
                <rect width="36" height="36" fill="currentColor"/>
            </clipPath>
        </defs>
    </svg>
</div>
@elseif($name === 'about')
<div      
{!! $attributes->merge(['class' => '']) !!} >
    <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 1024 1024">
        <path fill="currentColor" d="M512 64a448 448 0 1 1 0 896.064A448 448 0 0 1 512 64m67.2 275.072c33.28 0 60.288-23.104 60.288-57.344s-27.072-57.344-60.288-57.344c-33.28 0-60.16 23.104-60.16 57.344s26.88 57.344 60.16 57.344M590.912 699.2c0-6.848 2.368-24.64 1.024-34.752l-52.608 60.544c-10.88 11.456-24.512 19.392-30.912 17.28a12.99 12.99 0 0 1-8.256-14.72l87.68-276.992c7.168-35.136-12.544-67.2-54.336-71.296c-44.096 0-108.992 44.736-148.48 101.504c0 6.784-1.28 23.68.064 33.792l52.544-60.608c10.88-11.328 23.552-19.328 29.952-17.152a12.8 12.8 0 0 1 7.808 16.128L388.48 728.576c-10.048 32.256 8.96 63.872 55.04 71.04c67.84 0 107.904-43.648 147.456-100.416z"/>
    </svg>
</div>

@elseif ($name === 'books')
<div      
{!! $attributes->merge(['class' => '']) !!} >
        <svg width="25" height="25" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M37.45 31.3667L35.7833 24.9333L30.5333 5.61667C30.4199 5.19057 30.1422 4.82679 29.7611 4.605C29.38 4.38321 28.9265 4.32148 28.5 4.43333L22.05 6.1C21.8961 5.92941 21.7085 5.79249 21.4991 5.69784C21.2898 5.60319 21.0631 5.55286 20.8333 5.55H4.16667C3.72464 5.55 3.30072 5.72559 2.98816 6.03815C2.67559 6.35072 2.5 6.77464 2.5 7.21667V33.8833C2.5 34.3254 2.67559 34.7493 2.98816 35.0618C3.30072 35.3744 3.72464 35.55 4.16667 35.55H20.8333C21.2754 35.55 21.6993 35.3744 22.0118 35.0618C22.3244 34.7493 22.5 34.3254 22.5 33.8833V20.55L26.1667 34.25C26.2643 34.6136 26.4822 34.9334 26.7849 35.1574C27.0875 35.3813 27.4571 35.4962 27.8333 35.4833C27.9773 35.4997 28.1227 35.4997 28.2667 35.4833L36.3167 33.3333C36.5295 33.2764 36.7289 33.1779 36.9034 33.0435C37.0779 32.909 37.224 32.7413 37.3333 32.55C37.5091 32.1813 37.5504 31.7626 37.45 31.3667ZM10.7833 32.2833H5.78333V28.95H10.7833V32.2833ZM10.7833 25.6167H5.78333V15.6167H10.7833V25.6167ZM10.7833 12.2833H5.78333V8.95H10.7833V12.2833ZM19.1167 32.2833H14.1167V28.95H19.1167V32.2833ZM19.1167 25.6167H14.1167V15.6167H19.1167V25.6167ZM19.1167 12.2833H14.1167V8.95H19.1167V12.2833ZM22.8667 9.38333L27.7 8.08333L28.5667 11.3L23.7333 12.6L22.8667 9.38333ZM27.1833 25.4833L24.6 15.8167L29.4333 14.5167L32.0167 24.1833L27.1833 25.4833ZM28.85 31.9167L27.9833 28.7L32.8167 27.4L33.6833 30.6167L28.85 31.9167Z" fill="currentColor"/>
        </svg>  
</div>
@elseif ($name === 'post')
    <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24">
        <g fill="none" stroke="currentColor" stroke-width="1.5">
            <path d="M2.906 17.505L5.337 3.718a2 2 0 0 1 2.317-1.623L19.472 4.18a2 2 0 0 1 1.622 2.317l-2.431 13.787a2 2 0 0 1-2.317 1.623L4.528 19.822a2 2 0 0 1-1.622-2.317Z"/>
            <path stroke-linecap="round" d="m8.929 6.382l7.879 1.389m-8.574 2.55l7.879 1.39M7.54 14.26l4.924.869"/>
        </g>
    </svg>
@elseif($name === 'not-allowed')
<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect width="30" height="30" fill="white"/>
<path d="M15 1.5C12.33 1.5 9.71987 2.29176 7.49981 3.77516C5.27974 5.25856 3.54942 7.36697 2.52763 9.83377C1.50585 12.3006 1.2385 15.015 1.7594 17.6337C2.28031 20.2525 3.56606 22.6579 5.45406 24.5459C7.34207 26.434 9.74754 27.7197 12.3663 28.2406C14.985 28.7615 17.6994 28.4942 20.1662 27.4724C22.633 26.4506 24.7414 24.7203 26.2248 22.5002C27.7082 20.2801 28.5 17.67 28.5 15C28.5 11.4196 27.0777 7.9858 24.5459 5.45406C22.0142 2.92232 18.5804 1.5 15 1.5ZM22.5 16.5H7.50001V13.5H22.5V16.5Z" fill="#FF0000"/>
</svg>

@elseif ($name === 'heart')
    <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24">
        <path fill="currentColor" d="m8.962 18.91l.464-.588zM12 5.5l-.54.52a.75.75 0 0 0 1.08 0zm3.038 13.41l.465.59zm-5.612-.588C7.91 17.127 6.253 15.96 4.938 14.48C3.65 13.028 2.75 11.335 2.75 9.137h-1.5c0 2.666 1.11 4.7 2.567 6.339c1.43 1.61 3.254 2.9 4.68 4.024zM2.75 9.137c0-2.15 1.215-3.954 2.874-4.713c1.612-.737 3.778-.541 5.836 1.597l1.08-1.04C10.1 2.444 7.264 2.025 5 3.06C2.786 4.073 1.25 6.425 1.25 9.137zM8.497 19.5c.513.404 1.063.834 1.62 1.16c.557.325 1.193.59 1.883.59v-1.5c-.31 0-.674-.12-1.126-.385c-.453-.264-.922-.628-1.448-1.043zm7.006 0c1.426-1.125 3.25-2.413 4.68-4.024c1.457-1.64 2.567-3.673 2.567-6.339h-1.5c0 2.198-.9 3.891-2.188 5.343c-1.315 1.48-2.972 2.647-4.488 3.842zM22.75 9.137c0-2.712-1.535-5.064-3.75-6.077c-2.264-1.035-5.098-.616-7.54 1.92l1.08 1.04c2.058-2.137 4.224-2.333 5.836-1.596c1.659.759 2.874 2.562 2.874 4.713zm-8.176 9.185c-.526.415-.995.779-1.448 1.043c-.452.264-.816.385-1.126.385v1.5c.69 0 1.326-.265 1.883-.59c.558-.326 1.107-.756 1.62-1.16z"/>
    </svg>
@elseif ($name === 'comments')
<svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 16 16">
    <path fill="currentColor" fill-rule="evenodd" d="M10 9.5h.621l.44.44l1.51 1.51a.174.174 0 0 0 .295-.136l-.112-1.454l-.062-.809l.642-.495C14.037 8.016 14.5 7.211 14.5 6c0-1.214-.465-2.019-1.17-2.56c-.754-.578-1.902-.94-3.33-.94c-1.428 0-2.576.362-3.33.94C5.966 3.98 5.5 4.786 5.5 6s.465 2.019 1.17 2.56c.754.578 1.902.94 3.33.94m.52 2.02l.99.99a1.673 1.673 0 0 0 2.851-1.312l-.111-1.453C15.33 8.91 16 7.663 16 6c0-3.333-2.686-5-6-5c-2.127 0-3.995.687-5.06 2.06C2.131 3.384 0 5.03 0 8c0 1.663.669 2.911 1.75 3.745l-.111 1.453A1.673 1.673 0 0 0 4.49 14.51L6 13c1.803 0 3.42-.493 4.52-1.48M4.143 4.736C4.05 5.126 4 5.548 4 6c0 2.905 2.04 4.544 4.759 4.918c-.717.366-1.654.582-2.759.582h-.621l-.44.44l-1.51 1.51a.174.174 0 0 1-.295-.136l.112-1.454l.062-.809l-.642-.495C1.963 10.016 1.5 9.211 1.5 8c0-1.214.465-2.019 1.17-2.56c.391-.3.887-.541 1.473-.704" clip-rule="evenodd"/>
</svg>
@elseif ($name === 'google')
            <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <path fill="#EA4335 " d="M5.26620003,9.76452941 C6.19878754,6.93863203 8.85444915,4.90909091 12,4.90909091 C13.6909091,4.90909091 15.2181818,5.50909091 16.4181818,6.49090909 L19.9090909,3 C17.7818182,1.14545455 15.0545455,0 12,0 C7.27006974,0 3.1977497,2.69829785 1.23999023,6.65002441 L5.26620003,9.76452941 Z"/>
                  <path fill="#34A853" d="M16.0407269,18.0125889 C14.9509167,18.7163016 13.5660892,19.0909091 12,19.0909091 C8.86648613,19.0909091 6.21911939,17.076871 5.27698177,14.2678769 L1.23746264,17.3349879 C3.19279051,21.2936293 7.26500293,24 12,24 C14.9328362,24 17.7353462,22.9573905 19.834192,20.9995801 L16.0407269,18.0125889 Z"/>
                  <path fill="#4A90E2" d="M19.834192,20.9995801 C22.0291676,18.9520994 23.4545455,15.903663 23.4545455,12 C23.4545455,11.2909091 23.3454545,10.5272727 23.1818182,9.81818182 L12,9.81818182 L12,14.4545455 L18.4363636,14.4545455 C18.1187732,16.013626 17.2662994,17.2212117 16.0407269,18.0125889 L19.834192,20.9995801 Z"/>
                  <path fill="#FBBC05" d="M5.27698177,14.2678769 C5.03832634,13.556323 4.90909091,12.7937589 4.90909091,12 C4.90909091,11.2182781 5.03443647,10.4668121 5.26620003,9.76452941 L1.23999023,6.65002441 C0.43658717,8.26043162 0,10.0753848 0,12 C0,13.9195484 0.444780743,15.7301709 1.23746264,17.3349879 L5.27698177,14.2678769 Z"/>
            </svg>
@elseif($name === 'left-arrow')
    <div class="p-1 rounded-full bg-gray-200 w-fit">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
             stroke="currentColor" class="w-4 h-4">
            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"/>
        </svg>
    </div>
@elseif($name === 'search')

<svg xmlns="http://www.w3.org/2000/svg"  class="absolute right-3 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400" viewBox="0 0 24 24">
    <path fill="currentColor" d="m19.6 21l-6.3-6.3q-.75.6-1.725.95T9.5 16q-2.725 0-4.612-1.888T3 9.5q0-2.725 1.888-4.612T9.5 3q2.725 0 4.613 1.888T16 9.5q0 1.1-.35 2.075T14.7 13.3l6.3 6.3zM9.5 14q1.875 0 3.188-1.312T14 9.5q0-1.875-1.312-3.187T9.5 5Q7.625 5 6.313 6.313T5 9.5q0 1.875 1.313 3.188T9.5 14"/>
</svg>

@elseif($name === 'delete')
    <div {!! $attributes->merge(['class' => ' rounded-full p-1 hover:bg-red-600 hover:text-white text-red-600 transition-colors duration-300']) !!} >
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            >
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0"/>
        </svg>

    </div>
@elseif($name === 'update')
    <div
        class="rounded-full p-1 text-blue-600 hover:bg-blue-600 hover:text-white transition-colors duration-300">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
             class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10"/>
        </svg>

    </div>
@elseif($name === 'emprunts')
<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512"><path fill="currentColor" d="M352 96c0-53.02-42.98-96-96-96s-96 42.98-96 96s42.98 96 96 96s96-42.98 96-96M233.59 241.1c-59.33-36.32-155.43-46.3-203.79-49.05C13.55 191.13 0 203.51 0 219.14v222.8c0 14.33 11.59 26.28 26.49 27.05c43.66 2.29 131.99 10.68 193.04 41.43c9.37 4.72 20.48-1.71 20.48-11.87V252.56c-.01-4.67-2.32-8.95-6.42-11.46m248.61-49.05c-48.35 2.74-144.46 12.73-203.78 49.05c-4.1 2.51-6.41 6.96-6.41 11.63v245.79c0 10.19 11.14 16.63 20.54 11.9c61.04-30.72 149.32-39.11 192.97-41.4c14.9-.78 26.49-12.73 26.49-27.06V219.14c-.01-15.63-13.56-28.01-29.81-27.09"/></svg>
@elseif($name === 'dashboard')
<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24">
    <path fill="currentColor" d="M3 12a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1zm0 8a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1zm10 0a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-8a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1zm1-17a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1z"/>
</svg>
@elseif($name === 'genre')
<div      
{!! $attributes->merge(['class' => '']) !!} >
<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"  viewBox="0 0 24 24">
    <path fill="currentColor" fill-rule="evenodd" d="M17 3a4 4 0 1 0 0 8a4 4 0 0 0 0-8M3 17a4 4 0 1 1 8 0a4 4 0 0 1-8 0m10-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v5a2 2 0 0 1-2 2h-4a2 2 0 0 1-2-2zM3 4a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v5a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" clip-rule="evenodd"/>
</svg>
</div>
@elseif($name === 'advice')
<div      
{!! $attributes->merge(['class' => '']) !!} >
<svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 14 14">
    <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><path d="M13.5 2.5h-7v5h7zm-3.5 0v5M8.5.5l1.5 2l1.5-2M.5 11l2.444 2.036a2 2 0 0 0 1.28.463h6.442c.46 0 .834-.373.834-.833c0-.92-.746-1.667-1.667-1.667H5.354"/><path d="m3.5 10l.75.75a1.06 1.06 0 0 0 1.5-1.5L4.586 8.085A2 2 0 0 0 3.17 7.5H.5"/>
</g></svg>
</div>
@elseif($name === 'general')
<div      
{!! $attributes->merge(['class' => '']) !!} >

       <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24">
            <path fill="currentColor" d="M4 18a2 2 0 1 1 0 4a2 2 0 0 1 0-4m0 1.5a.5.5 0 1 0 0 1a.5.5 0 0 0 0-1M9.5 15a2.5 2.5 0 1 1 0 5a2.5 2.5 0 0 1 0-5m0 1.5a1 1 0 1 0 0 2a1 1 0 0 0 0-2M11.823 2a5.414 5.414 0 0 1 5.33 4.47h.082a3.765 3.765 0 1 1 0 7.53H6.412a3.765 3.765 0 1 1 0-7.53h.081A5.414 5.414 0 0 1 11.823 2m.006 1.498a3.927 3.927 0 0 0-3.923 3.728a.693.693 0 0 1-.692.659h-.7a2.31 2.31 0 1 0 0 4.617h10.63a2.31 2.31 0 1 0 0-4.617h-.7a.693.693 0 0 1-.692-.659a3.927 3.927 0 0 0-3.923-3.728"/>
       </svg>
</div>
         
@elseif($name === 'question')
<div      
{!! $attributes->merge(['class' => '']) !!} >
<svg xmlns="http://www.w3.org/2000/svg"  width="1.5em" height="1.5em" viewBox="0 0 24 24">
                <g fill="none">
                  <path d="M24 0v24H0V0zM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022m-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z"/><path fill="currentColor" d="M12 2c5.523 0 10 4.477 10 10s-4.477 10-10 10S2 17.523 2 12S6.477 2 12 2m0 2a8 8 0 1 0 0 16a8 8 0 0 0 0-16m0 12a1 1 0 1 1 0 2a1 1 0 0 1 0-2m0-9.5a3.625 3.625 0 0 1 1.348 6.99a.837.837 0 0 0-.305.201c-.044.05-.051.114-.05.18L13 14a1 1 0 0 1-1.993.117L11 14v-.25c0-1.153.93-1.845 1.604-2.116a1.626 1.626 0 1 0-2.229-1.509a1 1 0 1 1-2 0A3.625 3.625 0 0 1 12 6.5"/>
                </g>
              </svg>
</div>
@elseif($name === 'author')
<div      
    {!! $attributes->merge(['class' => '']) !!} >
<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 21 21">
    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M17 4a2.121 2.121 0 0 1 0 3l-9.5 9.5l-4 1l1-3.944l9.504-9.552a2.116 2.116 0 0 1 2.864-.125zM9.5 17.5h8m-2-11l1 1"/></svg>
</div>
@elseif($name === 'date')
<div {!! $attributes->merge(['class' => '']) !!}>
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 20 20">
    <path fill="currentColor" d="M5.673 0a.7.7 0 0 1 .7.7v1.309h7.517v-1.3a.7.7 0 0 1 1.4 0v1.3H18a2 2 0 0 1 2 1.999v13.993A2 2 0 0 1 18 20H2a2 2 0 0 1-2-1.999V4.008a2 2 0 0 1 2-1.999h2.973V.699a.7.7 0 0 1 .7-.699M1.4 7.742v10.259a.6.6 0 0 0 .6.6h16a.6.6 0 0 0 .6-.6V7.756zm5.267 6.877v1.666H5v-1.666zm4.166 0v1.666H9.167v-1.666zm4.167 0v1.666h-1.667v-1.666zm-8.333-3.977v1.666H5v-1.666zm4.166 0v1.666H9.167v-1.666zm4.167 0v1.666h-1.667v-1.666zM4.973 3.408H2a.6.6 0 0 0-.6.6v2.335l17.2.014V4.008a.6.6 0 0 0-.6-.6h-2.71v.929a.7.7 0 0 1-1.4 0v-.929H6.373v.92a.7.7 0 0 1-1.4 0z"/>
</svg>
</div>
@elseif($name === 'users')
<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 16 16">
    <path fill="currentColor" d="M8.5 4.5a2.5 2.5 0 1 1-5 0a2.5 2.5 0 0 1 5 0m2.4 7.506c.11.542-.348.994-.9.994H2c-.553 0-1.01-.452-.902-.994a5.002 5.002 0 0 1 9.803 0M14.002 12h-1.59a2.556 2.556 0 0 0-.04-.29a6.476 6.476 0 0 0-1.167-2.603a3.002 3.002 0 0 1 3.633 1.911c.18.522-.283.982-.836.982M12 8a2 2 0 1 0 0-4a2 2 0 0 0 0 4"/>
</svg>

@elseif($name === "close")
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
         class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"/>
    </svg>
@elseif($name === "add")
    <div class="inline-block   text-center text-white font-bold  rounded-full hover:bg-white hover:text-black duration-300 -translate-x-full bg-blye-500 group-hover:translate-x-0 ease-in-out">
    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" viewBox="0 0 24 24">
        <g fill="none">
            <path d="M24 0v24H0V0zM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022m-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z"/><path fill="currentColor" d="M10.5 20a1.5 1.5 0 0 0 3 0v-6.5H20a1.5 1.5 0 0 0 0-3h-6.5V4a1.5 1.5 0 0 0-3 0v6.5H4a1.5 1.5 0 0 0 0 3h6.5z"/>
        </g>
    </svg>
    </div>
@elseif($name === "details")
    <div {!! $attributes->merge([
        'class' => 'rounded-full p-1  hover:bg-green-600 hover:text-white transition-colors duration-300']) !!}>
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                 xmlns="http://www.w3.org/2000/svg"><path
                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
    </div>
@elseif($name === "user-remove")
    <div class="inline-block  p-1 text-center text-white font-bold  rounded-md bg-red-600">
    <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 24 24">
        <path fill="currentColor" d="M6.25 7.5a3.75 3.75 0 1 1 7.5 0a3.75 3.75 0 0 1-7.5 0m-4 9.5A3.75 3.75 0 0 1 6 13.25h.34c.185 0 .369.03.544.086l.866.283a7.251 7.251 0 0 0 2.967.323a.22.22 0 0 1 .223.3a5.983 5.983 0 0 0-.44 2.258c0 1.252.384 2.415 1.04 3.377c.091.134.003.323-.16.328a40.077 40.077 0 0 1-7.84-.5a1.537 1.537 0 0 1-1.29-1.517z"/><path fill="currentColor" fill-rule="evenodd" d="M12 16.5c0 .972.308 1.872.832 2.607A4.48 4.48 0 0 0 16.5 21a4.5 4.5 0 1 0-4.5-4.5m4.5 3a2.985 2.985 0 0 1-1.524-.415l4.109-4.109A3 3 0 0 1 16.5 19.5m-2.585-1.476l4.109-4.109a3 3 0 0 0-4.109 4.109" clip-rule="evenodd"/>
    </svg>
    </div>
@elseif($name === "user-deblock")
    <div
        class="inline-block  p-1 text-center text-white font-bold  rounded-md bg-gray-600">
        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 24 24">
            <g fill="none">
                <path d="M24 0v24H0V0zM12.594 23.258l-.012.002l-.071.035l-.02.004l-.014-.004l-.071-.036c-.01-.003-.019 0-.024.006l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.016-.018m.264-.113l-.014.002l-.184.093l-.01.01l-.003.011l.018.43l.005.012l.008.008l.201.092c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022m-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.003-.011l.018-.43l-.003-.012l-.01-.01z"/>
                <path fill="currentColor" d="M6 7a5 5 0 1 1 10 0A5 5 0 0 1 6 7m-1.178 7.672C6.425 13.694 8.605 13 11 13c.447 0 .887.024 1.316.07a1 1 0 0 1 .72 1.557A5.968 5.968 0 0 0 12 18c0 .92.207 1.79.575 2.567a1 1 0 0 1-.89 1.428L11 22c-2.229 0-4.335-.14-5.913-.558c-.785-.208-1.524-.506-2.084-.956C2.41 20.01 2 19.345 2 18.5c0-.787.358-1.523.844-2.139c.494-.625 1.177-1.2 1.978-1.69ZM18 14a1 1 0 0 1 1 1v2h2a1 1 0 1 1 0 2h-2v2a1 1 0 1 1-2 0v-2h-2a1 1 0 1 1 0-2h2v-2a1 1 0 0 1 1-1"/>
            </g>
        </svg>
    </div>
@elseif($name === "delete-forever")
    <div
        class="inline-block w-8 h-8 text-center text-white font-bold text-lg rounded-lg bg-gray-500">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
        </svg>


</div>
@elseif($name === "block")
    <div
        class="inline-block w-8 h-8 text-center text-white font-bold text-lg rounded-lg bg-gradient-to-tl from-red-500 to-pink-500">
         <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                          stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round"
                    d="M18.364 18.364A9 9 0 0 0 5.636 5.636m12.728 12.728A9 9 0 0 1 5.636 5.636m12.728 12.728L5.636 5.636"/>
         </svg>
</div>
@elseif($name === "restrict")
    <div
        class="inline-block w-8 h-8 text-center text-white font-bold text-lg rounded-lg bg-gradient-to-tl from-red-500 to-pink-500">
        <svg xmlns="http://www.w3.org/2000/svg" fill="#fff" class="w-6 h-6"  stroke="currentColor" viewBox="0 0 32 32"><g data-name="no image"><path d="M24 2H8a6 6 0 0 0-6 6v16a6 6 0 0 0 6 6h3a1 1 0 0 0 0-2H8a4 4 0 0 1-4-4V8a4 4 0 0 1 4-4h16a4 4 0 0 1 4 4v16a4 4 0 0 1-4 4h-9a1 1 0 0 0 0 2h9a6 6 0 0 0 6-6V8a6 6 0 0 0-6-6z"/><path d="M25.71 6.29a1 1 0 0 0-1.42 0l-18 18a1 1 0 0 0 0 1.42 1 1 0 0 0 1.42 0l18-18a1 1 0 0 0 0-1.42z"/></g></svg>
    </div>
@elseif($name === "allow")
<svg class="text-gray-700" xmlns="http://www.w3.org/2000/svg"  width="35" height="35" viewBox="0 0 24 24">
    <path fill="currentColor" d="M17 11v2h-1.46l4.68 4.68A9.92 9.92 0 0 0 22 12c0-5.52-4.48-10-10-10c-2.11 0-4.07.66-5.68 1.78L13.54 11zM2.27 2.27L1 3.54l2.78 2.78A9.92 9.92 0 0 0 2 12c0 5.52 4.48 10 10 10c2.11 0 4.07-.66 5.68-1.78L20.46 23l1.27-1.27L11 11zM7 13v-2h1.46l2 2z"/>
</svg>
@elseif($name === "reservation")

    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
    </svg>
@elseif($name === "authors")
<svg xmlns="http://www.w3.org/2000/svg" width="28" height="25"  viewBox="0 0 640 512">
    <path fill="currentColor" d="M224 256a128 128 0 1 0 0-256a128 128 0 1 0 0 256m-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512h293.1c-3.1-8.8-3.7-18.4-1.4-27.8l15-60.1c2.8-11.3 8.6-21.5 16.8-29.7l40.3-40.3c-32.1-31-75.7-50.1-123.9-50.1zm435.5-68.3c-15.6-15.6-40.9-15.6-56.6 0l-29.4 29.4l71 71l29.4-29.4c15.6-15.6 15.6-40.9 0-56.6zM375.9 417c-4.1 4.1-7 9.2-8.4 14.9l-15 60.1c-1.4 5.5.2 11.2 4.2 15.2s9.7 5.6 15.2 4.2l60.1-15c5.6-1.4 10.8-4.3 14.9-8.4l129.2-129.3l-71-71z"/>
</svg>

@elseif($name === "restoreUser")
    <div
            class="inline-block w-8 h-8 text-center text-white font-bold text-lg rounded-lg bg-green-700">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
          </svg>

</div>
@elseif($name === "validate")

    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
         class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5"/>
    </svg>
@elseif($name === "logout")
<div      
{!! $attributes->merge(['class' => '']) !!} >
<svg xmlns="http://www.w3.org/2000/svg"class="w-5 h-5 " viewBox="0 0 24 24">
    <path fill="currentColor" d="M12 3.25a.75.75 0 0 1 0 1.5a7.25 7.25 0 0 0 0 14.5a.75.75 0 0 1 0 1.5a8.75 8.75 0 1 1 0-17.5"/>
    <path fill="currentColor" d="M16.47 9.53a.75.75 0 0 1 1.06-1.06l3 3a.75.75 0 0 1 0 1.06l-3 3a.75.75 0 1 1-1.06-1.06l1.72-1.72H10a.75.75 0 0 1 0-1.5h8.19z"/>
</svg>
</div>
@elseif($name ==="accept")
<div class="rounded-full p-1 text-green-600 hover:bg-green-600 hover:text-white transition-colors duration-300">
<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-green" viewBox="0 0 24 24">
    <path fill="currentColor" d="m23 12l-2.44-2.78l.34-3.68l-3.61-.82l-1.89-3.18L12 3L8.6 1.54L6.71 4.72l-3.61.81l.34 3.68L1 12l2.44 2.78l-.34 3.69l3.61.82l1.89 3.18L12 21l3.4 1.46l1.89-3.18l3.61-.82l-.34-3.68zm-13 5l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9z"/>
</svg>
</div>
@elseif($name ==="refuse")
<div class="rounded-full p-1 text-red-600 hover:bg-red-600 hover:text-white transition-colors duration-300">
<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 " viewBox="0 0 48 48">
    <path fill="currentColor" fill-rule="evenodd" d="M44 24c0 11.046-8.954 20-20 20S4 35.046 4 24S12.954 4 24 4s20 8.954 20 20m-27.778 7.778a1 1 0 0 1 0-1.414L22.586 24l-6.364-6.364a1 1 0 0 1 1.414-1.414L24 22.586l6.364-6.364a1 1 0 0 1 1.414 1.414L25.414 24l6.364 6.364a1 1 0 0 1-1.414 1.414L24 25.414l-6.364 6.364a1 1 0 0 1-1.414 0" clip-rule="evenodd"/>
</svg>
</div>
@elseif($name === "detailsB")
    <div
        class="rounded-full p-1 text-blue-600 hover:bg-blue-600 hover:text-white transition-colors duration-300">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                 xmlns="http://www.w3.org/2000/svg"><path
                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
    </div>
@endif