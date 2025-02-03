<div x-data="{ showSidebar: false }" class="relative flex w-full flex-col md:flex-row">
    <!-- This allows screen readers to skip the sidebar and go directly to the main content. -->
    <a class="sr-only" href="#main-content">skip to the main content</a>

    <!-- dark overlay for when the sidebar is open on smaller screens  -->
    <div x-cloak x-show="showSidebar" class="fixed inset-0 z-10 bg-surface-dark/10 backdrop-blur-xs md:hidden"
        aria-hidden="true" x-on:click="showSidebar = false" x-transition.opacity></div>

    <nav x-cloak
        class="fixed left-0 z-20 flex h-svh w-60 shrink-0 flex-col border-r border-outline bg-surface-alt p-4 transition-transform duration-300 md:w-64 md:translate-x-0 md:relative dark:border-outline-dark dark:bg-surface-dark-alt"
        x-bind:class="showSidebar ? 'translate-x-0' : '-translate-x-60'" aria-label="sidebar navigation">
        <!-- logo  -->
        <a href="#" class="ml-2 w-fit text-2xl font-bold text-on-surface-strong dark:text-on-surface-dark-strong">
            <span class="sr-only">homepage</span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 376 155" fill="none" class="w-24" aria-hidden="true">
                <path
                    d="M54.009 101.344C54.137 103.733 54.777 105.867 55.929 107.744C57.081 109.621 58.745 111.093 60.921 112.16C63.1397 113.227 65.785 113.76 68.857 113.76C71.6303 113.76 74.0623 113.419 76.153 112.736C78.2863 112.053 80.0783 111.221 81.529 110.24C83.0223 109.216 84.1317 108.235 84.857 107.296L91.577 117.28C90.3823 118.773 88.7823 120.16 86.777 121.44C84.8143 122.677 82.297 123.659 79.225 124.384C76.1957 125.152 72.3983 125.536 67.833 125.536C62.073 125.536 57.017 124.405 52.665 122.144C48.313 119.883 44.921 116.619 42.489 112.352C40.057 108.085 38.841 103.008 38.841 97.12C38.841 92 39.929 87.392 42.105 83.296C44.281 79.1573 47.4383 75.8933 51.577 73.504C55.7583 71.1147 60.7717 69.92 66.617 69.92C72.121 69.92 76.8783 70.9867 80.889 73.12C84.9423 75.2107 88.0783 78.2827 90.297 82.336C92.5157 86.3893 93.625 91.3387 93.625 97.184C93.625 97.5253 93.6037 98.2293 93.561 99.296C93.561 100.32 93.5183 101.003 93.433 101.344H54.009ZM78.393 91.296C78.3503 89.9307 77.9237 88.4587 77.113 86.88C76.345 85.3013 75.129 83.9573 73.465 82.848C71.801 81.7387 69.5823 81.184 66.809 81.184C64.0357 81.184 61.753 81.7173 59.961 82.784C58.2117 83.8507 56.889 85.1733 55.993 86.752C55.097 88.288 54.585 89.8027 54.457 91.296H78.393ZM134.234 69.92C137.818 69.92 141.317 70.6667 144.73 72.16C148.143 73.6107 150.938 75.936 153.114 79.136C155.333 82.336 156.442 86.5173 156.442 91.68V124H140.122V94.496C140.122 90.1867 139.098 86.9867 137.05 84.896C135.045 82.8053 132.399 81.76 129.114 81.76C126.981 81.76 124.933 82.3573 122.97 83.552C121.05 84.704 119.471 86.3253 118.234 88.416C117.039 90.464 116.442 92.8107 116.442 95.456V124H100.186V71.456H116.442V79.84C116.911 78.3893 117.978 76.896 119.642 75.36C121.306 73.824 123.418 72.544 125.978 71.52C128.538 70.4533 131.29 69.92 134.234 69.92ZM189.297 152.096C185.457 152.096 181.766 151.733 178.225 151.008C174.726 150.283 171.548 149.152 168.689 147.616C165.83 146.08 163.441 144.075 161.521 141.6L171.377 131.616C172.273 132.768 173.425 133.92 174.833 135.072C176.284 136.267 178.118 137.248 180.337 138.016C182.556 138.827 185.329 139.232 188.657 139.232C191.814 139.232 194.524 138.613 196.785 137.376C199.089 136.181 200.86 134.475 202.097 132.256C203.377 130.037 204.017 127.456 204.017 124.512V123.04H219.953V125.472C219.953 131.275 218.588 136.16 215.857 140.128C213.126 144.096 209.457 147.083 204.849 149.088C200.241 151.093 195.057 152.096 189.297 152.096ZM204.017 124V114.848C203.633 115.787 202.652 117.109 201.073 118.816C199.494 120.523 197.361 122.08 194.673 123.488C192.028 124.853 188.913 125.536 185.329 125.536C180.294 125.536 175.836 124.341 171.953 121.952C168.07 119.52 165.02 116.213 162.801 112.032C160.625 107.808 159.537 103.051 159.537 97.76C159.537 92.4693 160.625 87.7333 162.801 83.552C165.02 79.328 168.07 76 171.953 73.568C175.836 71.136 180.294 69.92 185.329 69.92C188.828 69.92 191.857 70.5173 194.417 71.712C197.02 72.864 199.11 74.2293 200.689 75.808C202.31 77.344 203.356 78.7307 203.825 79.968V71.456H219.953V124H204.017ZM175.473 97.76C175.473 100.704 176.134 103.307 177.457 105.568C178.78 107.787 180.529 109.515 182.705 110.752C184.881 111.989 187.249 112.608 189.809 112.608C192.497 112.608 194.886 111.989 196.977 110.752C199.068 109.472 200.71 107.723 201.905 105.504C203.142 103.243 203.761 100.661 203.761 97.76C203.761 94.8587 203.142 92.2987 201.905 90.08C200.71 87.8187 199.068 86.048 196.977 84.768C194.886 83.488 192.497 82.848 189.809 82.848C187.249 82.848 184.881 83.488 182.705 84.768C180.529 86.0053 178.78 87.7547 177.457 90.016C176.134 92.2347 175.473 94.816 175.473 97.76ZM346.854 69.92C350.438 69.92 353.937 70.6667 357.35 72.16C360.763 73.6107 363.558 75.936 365.734 79.136C367.953 82.336 369.062 86.5173 369.062 91.68V124H352.742V94.496C352.742 90.1867 351.718 86.9867 349.67 84.896C347.665 82.8053 345.019 81.76 341.734 81.76C339.601 81.76 337.553 82.3573 335.59 83.552C333.67 84.704 332.091 86.3253 330.854 88.416C329.659 90.464 329.062 92.8107 329.062 95.456V124H312.806V71.456H329.062V79.84C329.531 78.3893 330.598 76.896 332.262 75.36C333.926 73.824 336.038 72.544 338.598 71.52C341.158 70.4533 343.91 69.92 346.854 69.92Z"
                    class="fill-on-surface-strong dark:fill-on-surface-dark-strong"></path>
                <path
                    d="M242.508 96.608C242.508 101.301 243.447 105.056 245.324 107.872C247.201 110.645 250.231 112.032 254.412 112.032C258.636 112.032 261.687 110.645 263.564 107.872C265.441 105.056 266.38 101.301 266.38 96.608V71.456H282.38V98.464C282.38 103.883 281.292 108.64 279.116 112.736C276.94 116.789 273.761 119.947 269.58 122.208C265.441 124.427 260.385 125.536 254.412 125.536C248.481 125.536 243.425 124.427 239.244 122.208C235.105 119.947 231.948 116.789 229.772 112.736C227.596 108.64 226.508 103.883 226.508 98.464V71.456H242.508V96.608ZM288.739 124V71.456H304.931V124H288.739ZM297.059 57.888C294.371 57.888 292.088 56.9493 290.211 55.072C288.376 53.1947 287.459 50.9547 287.459 48.352C287.459 45.7493 288.398 43.488 290.275 41.568C292.152 39.648 294.414 38.688 297.059 38.688C298.808 38.688 300.408 39.136 301.859 40.032C303.31 40.8853 304.483 42.0373 305.379 43.488C306.275 44.9387 306.723 46.56 306.723 48.352C306.723 50.9547 305.763 53.1947 303.843 55.072C301.966 56.9493 299.704 57.888 297.059 57.888Z"
                    class="fill-primary dark:fill-primary-dark"></path>
                <g>
                    <path
                        d="M36.9195 49.9344C37.7242 49.9344 38.3765 49.2951 38.3765 48.5065C38.3765 47.7179 37.7242 47.0786 36.9195 47.0786C36.1147 47.0786 35.4624 47.7179 35.4624 48.5065C35.4624 49.2951 36.1147 49.9344 36.9195 49.9344Z"
                        class="fill-on-surface-strong dark:fill-on-surface-dark-strong"></path>
                    <path
                        d="M68.6288 43.4241C65.7147 38.8016 61.4918 35.244 55.9846 32.7512C50.4528 30.2585 43.7849 29.0242 35.981 29.0242H4V126.024H19.6324C17.8049 112.471 18.2742 101.048 19.8547 91.7063C14.7427 95.7238 12.446 101.46 12.446 101.46C8.24767 90.6415 17.1135 80.0896 24.1024 75.6607C24.7445 73.9908 25.4112 72.4419 26.0533 71.014C29.6589 62.7854 27.1646 56.9528 23.4109 53.0806C18.9903 48.5307 12.8411 46.643 12.8411 46.643C12.8411 46.643 15.9034 41.1734 26.1027 46.8124C27.1152 47.369 28.3747 47.3448 29.3626 46.7398C30.0787 46.3041 30.8443 45.9411 31.6346 45.6023C37.5369 43.0611 44.2541 43.3999 49.3661 46.6672C55.1203 50.3458 62.2079 56.8076 58.3554 69.2715C57.7874 69.5619 56.2563 70.0701 55.7377 70.3363C48.5265 74.1844 40.4263 82.1709 42.2538 92.2146C42.2538 92.2146 47.6621 83.6956 56.7255 82.1225C56.7255 82.1225 70.9749 78.4197 72.8024 63.1969C72.9012 62.1078 73 61.0429 73 59.9054C73 53.5162 71.5429 48.0225 68.6041 43.4241H68.6288Z"
                        class="fill-on-surface-strong dark:fill-on-surface-dark-strong"></path>
                </g>
            </svg>
        </a>

        <!-- search  -->
        <div class="relative my-4 flex w-full max-w-xs flex-col gap-1 text-on-surface dark:text-on-surface-dark">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none"
                stroke-width="2"
                class="absolute left-2 top-1/2 size-5 -translate-y-1/2 text-on-surface/50 dark:text-on-surface-dark/50"
                aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
            </svg>
            <input type="search"
                class="w-full border border-outline rounded-radius bg-surface px-2 py-1.5 pl-9 text-sm focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary disabled:cursor-not-allowed disabled:opacity-75 dark:border-outline-dark dark:bg-surface-dark/50 dark:focus-visible:outline-primary-dark"
                name="search" aria-label="Search" placeholder="Search" />
        </div>

        <!-- sidebar links  -->
        <div class="flex flex-col gap-2 overflow-y-auto pb-6">

            <a href="#"
                class="flex items-center rounded-radius gap-2 px-2 py-1.5 text-sm font-medium text-on-surface underline-offset-2 hover:bg-primary/5 hover:text-on-surface-strong focus-visible:underline focus:outline-hidden dark:text-on-surface-dark dark:hover:bg-primary-dark/5 dark:hover:text-on-surface-dark-strong">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 shrink-0"
                    aria-hidden="true">
                    <path
                        d="M15.5 2A1.5 1.5 0 0 0 14 3.5v13a1.5 1.5 0 0 0 1.5 1.5h1a1.5 1.5 0 0 0 1.5-1.5v-13A1.5 1.5 0 0 0 16.5 2h-1ZM9.5 6A1.5 1.5 0 0 0 8 7.5v9A1.5 1.5 0 0 0 9.5 18h1a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 10.5 6h-1ZM3.5 10A1.5 1.5 0 0 0 2 11.5v5A1.5 1.5 0 0 0 3.5 18h1A1.5 1.5 0 0 0 6 16.5v-5A1.5 1.5 0 0 0 4.5 10h-1Z" />
                </svg>
                <span>Dashboard</span>
            </a>

            <!-- collapsible item  -->
            <div x-data="{ isExpanded: false }" class="flex flex-col">
                <button type="button" x-on:click="isExpanded = ! isExpanded" id="user-management-btn"
                    aria-controls="user-management" x-bind:aria-expanded="isExpanded ? 'true' : 'false'"
                    class="flex items-center justify-between rounded-radius gap-2 px-2 py-1.5 text-sm font-medium underline-offset-2 focus:outline-hidden focus-visible:underline"
                    x-bind:class="isExpanded ? 'text-on-surface-strong bg-primary/10 dark:text-on-surface-dark-strong dark:bg-primary-dark/10' :  'text-on-surface hover:bg-primary/5 hover:text-on-surface-strong dark:text-on-surface-dark dark:hover:text-on-surface-dark-strong dark:hover:bg-primary-dark/5'">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                        class="size-5 shrink-0" aria-hidden="true">
                        <path
                            d="M7 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM14.5 9a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5ZM1.615 16.428a1.224 1.224 0 0 1-.569-1.175 6.002 6.002 0 0 1 11.908 0c.058.467-.172.92-.57 1.174A9.953 9.953 0 0 1 7 18a9.953 9.953 0 0 1-5.385-1.572ZM14.5 16h-.106c.07-.297.088-.611.048-.933a7.47 7.47 0 0 0-1.588-3.755 4.502 4.502 0 0 1 5.874 2.636.818.818 0 0 1-.36.98A7.465 7.465 0 0 1 14.5 16Z" />
                    </svg>
                    <span class="mr-auto text-left">User Management</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                        class="size-5 transition-transform rotate-0 shrink-0"
                        x-bind:class="isExpanded ? 'rotate-180' : 'rotate-0'" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
                            clip-rule="evenodd" />
                    </svg>
                </button>

                <ul x-cloak x-collapse x-show="isExpanded" aria-labelledby="user-management-btn" id="user-management">
                    <li class="px-1 py-0.5 first:mt-2">
                        <a href="#"
                            class="flex items-center rounded-radius gap-2 px-2 py-1.5 text-sm text-on-surface underline-offset-2 hover:bg-primary/5 hover:text-on-surface-strong focus:outline-hidden focus-visible:underline dark:text-on-surface-dark dark:hover:bg-primary-dark/5 dark:hover:text-on-surface-dark-strong">Users</a>
                    </li>
                    <li class="px-1 py-0.5 first:mt-2">
                        <a href="#"
                            class="flex items-center rounded-radius gap-2 px-2 py-1.5 text-sm text-on-surface underline-offset-2 hover:bg-primary/5 hover:text-on-surface-strong focus:outline-hidden focus-visible:underline dark:text-on-surface-dark dark:hover:bg-primary-dark/5 dark:hover:text-on-surface-dark-strong">Permissions</a>
                    </li>
                    <li class="px-1 py-0.5 first:mt-2">
                        <a href="#"
                            class="flex items-center rounded-radius gap-2 px-2 py-1.5 text-sm text-on-surface underline-offset-2 hover:bg-primary/5 hover:text-on-surface-strong focus:outline-hidden focus-visible:underline dark:text-on-surface-dark dark:hover:bg-primary-dark/5 dark:hover:text-on-surface-dark-strong">Activity
                            Log</a>
                    </li>
                </ul>
            </div>

            <!-- collapsible item  -->
            <div x-data="{ isExpanded: false }" class="flex flex-col">
                <button type="button" x-on:click="isExpanded = ! isExpanded" id="products-btn" aria-controls="products"
                    x-bind:aria-expanded="isExpanded ? 'true' : 'false'"
                    class="flex items-center justify-between rounded-radius gap-2 px-2 py-1.5 text-sm font-medium underline-offset-2 focus:outline-hidden focus-visible:underline"
                    x-bind:class="isExpanded ? 'text-on-surface-strong bg-primary/10 dark:text-on-surface-dark-strong dark:bg-primary-dark/10' :  'text-on-surface hover:bg-primary/5 hover:text-on-surface-strong dark:text-on-surface-dark dark:hover:text-on-surface-dark-strong dark:hover:bg-primary-dark/5'">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                        class="size-5 shrink-0" aria-hidden="true">
                        <path
                            d="M10.362 1.093a.75.75 0 0 0-.724 0L2.523 5.018 10 9.143l7.477-4.125-7.115-3.925ZM18 6.443l-7.25 4v8.25l6.862-3.786A.75.75 0 0 0 18 14.25V6.443ZM9.25 18.693v-8.25l-7.25-4v7.807a.75.75 0 0 0 .388.657l6.862 3.786Z" />
                    </svg>
                    <span class="mr-auto text-left">Products</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                        class="size-5 transition-transform rotate-0 shrink-0"
                        x-bind:class="isExpanded ? 'rotate-180' : 'rotate-0'" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
                            clip-rule="evenodd" />
                    </svg>
                </button>

                <ul x-cloak x-collapse x-show="isExpanded" aria-labelledby="products-btn" id="products">
                    <li class="px-1 py-0.5 first:mt-2">
                        <a href="#"
                            class="flex items-center rounded-radius gap-2 px-2 py-1.5 text-sm text-on-surface underline-offset-2 hover:bg-primary/5 hover:text-on-surface-strong focus:outline-hidden focus-visible:underline dark:text-on-surface-dark dark:hover:bg-primary-dark/5 dark:hover:text-on-surface-dark-strong">All
                            Products</a>
                    </li>
                    <li class="px-1 py-0.5 first:mt-2">
                        <a href="#"
                            class="flex items-center rounded-radius gap-2 px-2 py-1.5 text-sm text-on-surface underline-offset-2 hover:bg-primary/5 hover:text-on-surface-strong focus:outline-hidden focus-visible:underline dark:text-on-surface-dark dark:hover:bg-primary-dark/5 dark:hover:text-on-surface-dark-strong">Inventory</a>
                    </li>
                    <li class="px-1 py-0.5 first:mt-2">
                        <a href="#"
                            class="flex items-center rounded-radius gap-2 px-2 py-1.5 text-sm text-on-surface underline-offset-2 hover:bg-primary/5 hover:text-on-surface-strong focus:outline-hidden focus-visible:underline dark:text-on-surface-dark dark:hover:bg-primary-dark/5 dark:hover:text-on-surface-dark-strong">Reviews</a>
                    </li>
                </ul>
            </div>

            <!-- collapsible item  -->
            <div x-data="{ isExpanded: false }" class="flex flex-col">
                <button type="button" x-on:click="isExpanded = ! isExpanded" id="orders-btn" aria-controls="orders"
                    x-bind:aria-expanded="isExpanded ? 'true' : 'false'"
                    class="flex items-center justify-between rounded-radius gap-2 px-2 py-1.5 text-sm font-medium underline-offset-2 focus:outline-hidden focus-visible:underline"
                    x-bind:class="isExpanded ? 'text-on-surface-strong bg-primary/10 dark:text-on-surface-dark-strong dark:bg-primary-dark/10' :  'text-on-surface hover:bg-primary/5 hover:text-on-surface-strong dark:text-on-surface-dark dark:hover:text-on-surface-dark-strong dark:hover:bg-primary-dark/5'">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                        class="size-5 shrink-0" aria-hidden="true">
                        <path
                            d="M6.5 3c-1.051 0-2.093.04-3.125.117A1.49 1.49 0 0 0 2 4.607V10.5h9V4.606c0-.771-.59-1.43-1.375-1.489A41.568 41.568 0 0 0 6.5 3ZM2 12v2.5A1.5 1.5 0 0 0 3.5 16h.041a3 3 0 0 1 5.918 0h.791a.75.75 0 0 0 .75-.75V12H2Z" />
                        <path
                            d="M6.5 18a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3ZM13.25 5a.75.75 0 0 0-.75.75v8.514a3.001 3.001 0 0 1 4.893 1.44c.37-.275.61-.719.595-1.227a24.905 24.905 0 0 0-1.784-8.549A1.486 1.486 0 0 0 14.823 5H13.25ZM14.5 18a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z" />
                    </svg>
                    <span class="mr-auto text-left">Orders</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                        class="size-5 transition-transform rotate-0 shrink-0"
                        x-bind:class="isExpanded ? 'rotate-180' : 'rotate-0'" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
                            clip-rule="evenodd" />
                    </svg>
                </button>

                <ul x-cloak x-collapse x-show="isExpanded" aria-labelledby="orders-btn" id="orders">
                    <li class="px-1 py-0.5 first:mt-2">
                        <a href="#"
                            class="flex items-center rounded-radius gap-2 px-2 py-1.5 text-sm text-on-surface underline-offset-2 hover:bg-primary/5 hover:text-on-surface-strong focus:outline-hidden focus-visible:underline dark:text-on-surface-dark dark:hover:bg-primary-dark/5 dark:hover:text-on-surface-dark-strong">
                            <span>Pending</span>
                            <span class="ml-auto font-bold">3</span>
                        </a>
                    </li>
                    <li class="px-1 py-0.5 first:mt-2">
                        <a href="#"
                            class="flex items-center rounded-radius gap-2 px-2 py-1.5 text-sm text-on-surface underline-offset-2 hover:bg-primary/5 hover:text-on-surface-strong focus:outline-hidden focus-visible:underline dark:text-on-surface-dark dark:hover:bg-primary-dark/5 dark:hover:text-on-surface-dark-strong">
                            <span>Shipped</span>
                            <span class="ml-auto font-bold">12</span>
                        </a>
                    </li>
                    <li class="px-1 py-0.5 first:mt-2">
                        <a href="#"
                            class="flex items-center rounded-radius gap-2 px-2 py-1.5 text-sm text-on-surface underline-offset-2 hover:bg-primary/5 hover:text-on-surface-strong focus:outline-hidden focus-visible:underline dark:text-on-surface-dark dark:hover:bg-primary-dark/5 dark:hover:text-on-surface-dark-strong">
                            <span>Completed</span>
                            <span class="ml-auto font-bold">38</span>
                        </a>
                    </li>
                    <li class="px-1 py-0.5 first:mt-2">
                        <a href="#"
                            class="flex items-center rounded-radius gap-2 px-2 py-1.5 text-sm text-on-surface underline-offset-2 hover:bg-primary/5 hover:text-on-surface-strong focus:outline-hidden focus-visible:underline dark:text-on-surface-dark dark:hover:bg-primary-dark/5 dark:hover:text-on-surface-dark-strong">
                            <span>Returns</span>
                            <span class="ml-auto font-bold">2</span>
                        </a>
                    </li>
                </ul>
            </div>

            <a href="#"
                class="flex items-center rounded-radius gap-2 px-2 py-1.5 text-sm font-medium text-on-surface underline-offset-2 hover:bg-primary/5 hover:text-on-surface-strong focus-visible:underline focus:outline-hidden dark:text-on-surface-dark dark:hover:bg-primary-dark/5 dark:hover:text-on-surface-dark-strong">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 shrink-0"
                    aria-hidden="true">
                    <path fill-rule="evenodd"
                        d="M7.84 1.804A1 1 0 0 1 8.82 1h2.36a1 1 0 0 1 .98.804l.331 1.652a6.993 6.993 0 0 1 1.929 1.115l1.598-.54a1 1 0 0 1 1.186.447l1.18 2.044a1 1 0 0 1-.205 1.251l-1.267 1.113a7.047 7.047 0 0 1 0 2.228l1.267 1.113a1 1 0 0 1 .206 1.25l-1.18 2.045a1 1 0 0 1-1.187.447l-1.598-.54a6.993 6.993 0 0 1-1.929 1.115l-.33 1.652a1 1 0 0 1-.98.804H8.82a1 1 0 0 1-.98-.804l-.331-1.652a6.993 6.993 0 0 1-1.929-1.115l-1.598.54a1 1 0 0 1-1.186-.447l-1.18-2.044a1 1 0 0 1 .205-1.251l1.267-1.114a7.05 7.05 0 0 1 0-2.227L1.821 7.773a1 1 0 0 1-.206-1.25l1.18-2.045a1 1 0 0 1 1.187-.447l1.598.54A6.992 6.992 0 0 1 7.51 3.456l.33-1.652ZM10 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"
                        clip-rule="evenodd" />
                </svg>
                <span>Settings</span>
            </a>
        </div>
    </nav>

    <!-- main content  -->
    <div id="main-content" class="h-svh w-full overflow-y-auto p-4 bg-white dark:bg-slate-900">
        <!-- Add main content here  -->
    </div>

    <!-- toggle button for small screen  -->
    <button
        class="fixed right-4 top-4 z-20 rounded-full bg-primary p-4 md:hidden text-on-primary dark:bg-primary-dark dark:text-on-primary-dark"
        x-on:click="showSidebar = ! showSidebar">
        <svg x-show="showSidebar" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
            class="size-5" aria-hidden="true">
            <path
                d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z" />
        </svg>
        <svg x-show="! showSidebar" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
            class="size-5" aria-hidden="true">
            <path
                d="M0 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm5-1v12h9a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1zM4 2H2a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h2z" />
        </svg>
        <span class="sr-only">sidebar toggle</span>
    </button>
</div>