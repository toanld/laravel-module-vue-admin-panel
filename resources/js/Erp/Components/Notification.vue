<script setup>
import { ref } from "vue"
// import { Tabs, Tab } from 'flowbite-vue'

import tabs from '@/Erp/Components/Tabs.vue'
import tab from '@/Erp/Components/Tab.vue'
const activeTab = ref('all')
</script>
<template>
      <!-- Notifications -->
    <div
        class="hidden overflow-hidden z-50 my-4 max-w-sm text-base list-none bg-white rounded divide-y divide-gray-100 shadow-lg dark:divide-gray-600 dark:bg-gray-700 rounded-xl !-left-5"
        id="notification-dropdown"
    >
        <div>
            <tabs variant="underline" v-model="activeTab" class="" >
            <tab name="work" title="Công việc">
              <div class="overflow-y-auto h-96">
                  <a
                href="#"
                class="flex py-3 px-4 border-b hover:bg-gray-100 dark:hover:bg-gray-600 dark:border-gray-600"
                >
                <div class="flex-shrink-0">
                    <img
                        class="w-11 h-11 rounded-full"
                        src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/joseph-mcfall.png"
                        alt="Joseph McFall avatar"
                    />
                </div>
                <div class="pl-3 w-full">
                    <div
                        class="text-gray-500 font-normal text-sm mb-1.5 dark:text-gray-400"
                    >
                <span class="font-semibold text-gray-900 dark:text-white"
                >Joseph Mcfall</span
                >
                        and
                        <span class="font-medium text-gray-900 dark:text-white"
                        >141 others</span
                        >
                        love your story. See it and view more stories.
                    </div>
                    <div
                        class="text-xs font-medium text-primary-600 dark:text-primary-500"
                    >
                        44 minutes ago
                    </div>
                </div>
            </a>
              </div>
            </tab>
            <tab name="check" title="Duyệt">
              <div class="overflow-y-auto h-96">
                <a
                href="#"
                class="flex py-3 px-4 border-b hover:bg-gray-100 dark:hover:bg-gray-600 dark:border-gray-600"
                >
                <div class="flex-shrink-0">
                    <img
                        class="w-11 h-11 rounded-full"
                        src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/joseph-mcfall.png"
                        alt="Joseph McFall avatar"
                    />
                </div>
                <div class="pl-3 w-full">
                    <div
                        class="text-gray-500 font-normal text-sm mb-1.5 dark:text-gray-400"
                    >
                <span class="font-semibold text-gray-900 dark:text-white"
                >Joseph Mcfall</span
                >
                        and
                        <span class="font-medium text-gray-900 dark:text-white"
                        >141 others</span
                        >
                        love your story. See it and view more stories.
                    </div>
                    <div
                        class="text-xs font-medium text-primary-600 dark:text-primary-500"
                    >
                        44 minutes ago
                    </div>
                </div>
            </a>
              </div>
            </tab>
            <tab name="all" title="Tất cả" >
                <div class="overflow-y-auto h-96">
                 <a
                href="#"
                class="flex py-3 px-4 border-b hover:bg-gray-100 dark:hover:bg-gray-600 dark:border-gray-600"
                >
                <div class="flex-shrink-0">
                    <img
                        class="w-11 h-11 rounded-full"
                        src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png"
                        alt="Bonnie Green avatar"
                    />
                </div>
                <div class="pl-3 w-full">
                    <div
                        class="text-gray-500 font-normal text-sm mb-1.5 dark:text-gray-400"
                    >
                        New message from
                        <span class="font-semibold text-gray-900 dark:text-white"
                        >Bonnie Green</span
                        >: "Hey, what's up? All set for the presentation?"
                    </div>
                    <div
                        class="text-xs font-medium text-primary-600 dark:text-primary-500"
                    >
                        a few moments ago
                    </div>
                </div>
            </a>
            <a
                href="#"
                class="flex py-3 px-4 border-b hover:bg-gray-100 dark:hover:bg-gray-600 dark:border-gray-600"
                >
                <div class="flex-shrink-0">
                    <img
                        class="w-11 h-11 rounded-full"
                        src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png"
                        alt="Jese Leos avatar"
                    />
                </div>
                <div class="pl-3 w-full">
                    <div
                        class="text-gray-500 font-normal text-sm mb-1.5 dark:text-gray-400"
                    >
                <span class="font-semibold text-gray-900 dark:text-white"
                >Jese leos</span
                >
                        and
                        <span class="font-medium text-gray-900 dark:text-white"
                        >5 others</span
                        >
                        started following you.
                    </div>
                    <div
                        class="text-xs font-medium text-primary-600 dark:text-primary-500"
                    >
                        10 minutes ago
                    </div>
                </div>
            </a>
            <a
                href="#"
                class="flex py-3 px-4 border-b hover:bg-gray-100 dark:hover:bg-gray-600 dark:border-gray-600"
                >
                <div class="flex-shrink-0">
                    <img
                        class="w-11 h-11 rounded-full"
                        src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/joseph-mcfall.png"
                        alt="Joseph McFall avatar"
                    />
                </div>
                <div class="pl-3 w-full">
                    <div
                        class="text-gray-500 font-normal text-sm mb-1.5 dark:text-gray-400"
                    >
                <span class="font-semibold text-gray-900 dark:text-white"
                >Joseph Mcfall</span
                >
                        and
                        <span class="font-medium text-gray-900 dark:text-white"
                        >141 others</span
                        >
                        love your story. See it and view more stories.
                    </div>
                    <div
                        class="text-xs font-medium text-primary-600 dark:text-primary-500"
                    >
                        44 minutes ago
                    </div>
                </div>
            </a>
            <a
                href="#"
                class="flex py-3 px-4 border-b hover:bg-gray-100 dark:hover:bg-gray-600 dark:border-gray-600"
             >
                <div class="flex-shrink-0">
                    <img
                        class="w-11 h-11 rounded-full"
                        src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/roberta-casas.png"
                        alt="Roberta Casas image"
                    />
                </div>
                <div class="pl-3 w-full">
                    <div
                        class="text-gray-500 font-normal text-sm mb-1.5 dark:text-gray-400"
                    >
                        <span class="font-semibold text-gray-900 dark:text-white"
                        >Leslie Livingston</span
                        >
                        mentioned you in a comment:
                        <span
                            class="font-medium text-primary-600 dark:text-primary-500"
                        >@bonnie.green</span
                        >
                        what do you say?
                    </div>
                    <div
                        class="text-xs font-medium text-primary-600 dark:text-primary-500"
                    >
                        1 hour ago
                    </div>
                </div>
            </a>
            <a
                href="#"
                class="flex py-3 px-4 hover:bg-gray-100 dark:hover:bg-gray-600"
                >
                <div class="flex-shrink-0">
                    <img
                        class="w-11 h-11 rounded-full"
                        src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/robert-brown.png"
                        alt="Robert image"
                    />
                </div>
                <div class="pl-3 w-full">
                    <div
                        class="text-gray-500 font-normal text-sm mb-1.5 dark:text-gray-400"
                    >
                    <span class="font-semibold text-gray-900 dark:text-white"
                    >Robert Brown</span
                    >
                        posted a new video: Glassmorphism - learn how to implement
                        the new design trend.
                    </div>
                    <div
                        class="text-xs font-medium text-primary-600 dark:text-primary-500"
                    >
                        3 hours ago
                    </div>
                </div>
            </a>
             <a
                href="#"
                class="flex py-3 px-4 hover:bg-gray-100 dark:hover:bg-gray-600"
                >
                <div class="flex-shrink-0">
                    <img
                        class="w-11 h-11 rounded-full"
                        src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/robert-brown.png"
                        alt="Robert image"
                    />
                </div>
                <div class="pl-3 w-full">
                    <div
                        class="text-gray-500 font-normal text-sm mb-1.5 dark:text-gray-400"
                    >
                    <span class="font-semibold text-gray-900 dark:text-white"
                    >Robert Brown</span
                    >
                        posted a new video: Glassmorphism - learn how to implement
                        the new design trend.
                    </div>
                    <div
                        class="text-xs font-medium text-primary-600 dark:text-primary-500"
                    >
                        3 hours ago
                    </div>
                </div>
            </a>
             <a
                href="#"
                class="flex py-3 px-4 hover:bg-gray-100 dark:hover:bg-gray-600"
                >
                <div class="flex-shrink-0">
                    <img
                        class="w-11 h-11 rounded-full"
                        src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/robert-brown.png"
                        alt="Robert image"
                    />
                </div>
                <div class="pl-3 w-full">
                    <div
                        class="text-gray-500 font-normal text-sm mb-1.5 dark:text-gray-400"
                    >
                    <span class="font-semibold text-gray-900 dark:text-white"
                    >Robert Brown</span
                    >
                        posted a new video: Glassmorphism - learn how to implement
                        the new design trend.
                    </div>
                    <div
                        class="text-xs font-medium text-primary-600 dark:text-primary-500"
                    >
                        3 hours ago
                    </div>
                </div>
            </a>
            </div>
            </tab>
          </tabs>

        </div>
        <a
            href="#"
            class="block py-2 text-md font-medium text-center text-gray-900 bg-gray-50 hover:bg-gray-100 dark:bg-gray-600 dark:text-white dark:hover:underline"
        >
            <div class="inline-flex items-center">
                <svg
                    aria-hidden="true"
                    class="mr-2 w-4 h-4 text-gray-500 dark:text-gray-400"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                    <path
                        fill-rule="evenodd"
                        d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                        clip-rule="evenodd"
                    ></path>
                </svg>
                Xem tất cả
            </div>
        </a>
    </div>

</template>
