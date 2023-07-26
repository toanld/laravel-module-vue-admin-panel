<script setup>
import { ref } from "vue"
// import { Tabs, Tab } from 'flowbite-vue'
const activeTab = ref('save')

import tabs from '@/Erp/Components/Tabs.vue'
import tab from '@/Erp/Components/Tab.vue'
import IconM from '@/Erp/Components/IconM.vue'

</script>
<template>
      <!-- Notifications -->
    <div
        class="w-500 hidden overflow-hidden z-50 my-4 text-base list-none bg-white rounded divide-y divide-gray-100 shadow-lg dark:divide-gray-600 dark:bg-gray-700 rounded-xl !-left-24"
        id="summary-dropdown"
    >
        <div class="relative">
            <tabs  v-model="activeTab">
                <tab name="use" title="Hay dùng" >
                    <div class="w-full py-5">
                        <div class="empty flex justify-center items-center">
                            <svg version="1.1" viewBox="0 0 700 700" class="fill-gray-300" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="5em" height="5em">
                                <g>
                                    <path d="m610.53 376.17-113.34-102h-294.38l-113.34 102-15.609-17.336 119.99-108h312.3l119.99 108z"></path>
                                    <path d="m595 560h-490c-19.301 0-35-15.699-35-35v-169.17h186.67v11.668c0 28.949 23.551 52.5 52.5 52.5h81.668c28.949 0 52.5-23.551 52.5-52.5v-11.668h186.67v169.17c-0.003906 19.301-15.703 35-35.004 35zm-501.67-180.83v145.83c0 6.4336 5.2344 11.668 11.668 11.668h490c6.4336 0 11.668-5.2344 11.668-11.668v-145.83h-140.89c-5.6289 36.301-37.094 64.164-74.941 64.164h-81.664c-37.848 0-69.312-27.867-74.941-64.168z"></path>
                                    <path d="m237.34 92.914 40.832 64.168-19.688 12.527-40.832-64.168z"></path>
                                    <path d="m468.49 92.895 19.688 12.523-40.828 64.168-19.688-12.523z"></path>
                                    <path d="m338.33 81.668h23.332v75.832h-23.332z"></path>
                                </g>
                            </svg>
                        </div>
                    </div>
                </tab>
                <tab name="save" title="Đã lưu">
                  <div class="w-full p-3">
                        <div class="flex p-2 hover:bg-gray-100 group gap-3 flex rounded-lg justify-start items-center relative">
                            <div class="flex items-center justify-center flex-shrink-0 text-gray-600 pl-2 pr-3">
                                <i class="icon-filters"></i>
                            </div>
                            <div>
                                <div>Danh sách nhân sự thuộc Ban điều hành</div>
                                <div class="whitespace-no-wrap text-gray-600 overflow-hidden text-xs">Hồ sơ nhân sự</div>
                            </div>
                            <div class="bookmark-item-actions gap-3 pl-3 pr-3 absolute right-0 top-0 bottom-0 inline-flex items-center overflow-hidden z-10 opacity-0 max-w-0 rounded-r-lg group-hover:max-w-xs group-hover:opacity-100 group-hover:bg-gray-100  delay-100 " style="transition: max-width .2s ease-in,opacity .2s ease-in;">
                            <div class="bookmark-action transition ease-in duration-100 cursor-pointer" title="Thêm vào danh sách hay dùng">

                                <svg xmlns="http://www.w3.org/2000/svg" class="" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="-10 0 1034 1024" width="1em" height="1em">
                                   <path fill="currentColor" d="M511.998 115.41c12.2109 0 23.3555 6.94727 28.7324 17.9092l120.585 245.863l239.347 35.2354c11.9766 1.7627 21.9346 10.1348 25.7275 21.6318s0.772461 24.1514 -7.80371 32.6963l-179.46 178.794l60.0791 264.631
                                c2.75586 12.1338 -1.77148 24.7588 -11.6055 32.3799s-23.1934 8.84961 -34.2529 3.15332l-241.348 -124.301l-241.347 124.301c-11.0605 5.69629 -24.418 4.4668 -34.252 -3.15332s-14.3604 -20.2451 -11.6064 -32.3799l60.0811 -264.631l-179.46 -178.794
                                c-8.57715 -8.54492 -11.5967 -21.1992 -7.80371 -32.6963s13.751 -19.8691 25.7275 -21.6318l239.344 -35.2354l120.589 -245.863c5.37598 -10.9609 16.5205 -17.9092 28.7266 -17.9092zM511.998 220.08l-99.2695 202.401
                                c-4.64062 9.46191 -13.6426 16.0322 -24.0693 17.5674l-192.872 28.3936l146.797 146.253c7.80273 7.77344 11.0586 19.0117 8.62109 29.751l-48.792 214.912l194.934 -100.399c9.19531 -4.73242 20.1094 -4.73242 29.3037 0l194.935 100.399l-48.7939 -214.912
                                c-2.43555 -10.7393 0.819336 -21.9785 8.62305 -29.751l146.795 -146.253l-192.87 -28.3936c-10.4277 -1.53516 -19.4297 -8.10449 -24.0674 -17.5674z"></path>
                                </svg>
                            </div>
                            <div class="bookmark-action ease-in duration-100 cursor-pointer"  title="Sửa lối tắt">
                                <svg fill="#000000" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="16px" height="16px"><path d="M 36 5.0097656 C 34.205301 5.0097656 32.410791 5.6901377 31.050781 7.0507812 L 8.9160156 29.183594 C 8.4960384 29.603571 8.1884588 30.12585 8.0253906 30.699219 L 5.0585938 41.087891 A 1.50015 1.50015 0 0 0 6.9121094 42.941406 L 17.302734 39.974609 A 1.50015 1.50015 0 0 0 17.304688 39.972656 C 17.874212 39.808939 18.39521 39.50518 18.816406 39.083984 L 40.949219 16.949219 C 43.670344 14.228094 43.670344 9.7719064 40.949219 7.0507812 C 39.589209 5.6901377 37.794699 5.0097656 36 5.0097656 z M 36 7.9921875 C 37.020801 7.9921875 38.040182 8.3855186 38.826172 9.171875 A 1.50015 1.50015 0 0 0 38.828125 9.171875 C 40.403 10.74675 40.403 13.25325 38.828125 14.828125 L 36.888672 16.767578 L 31.232422 11.111328 L 33.171875 9.171875 C 33.957865 8.3855186 34.979199 7.9921875 36 7.9921875 z M 29.111328 13.232422 L 34.767578 18.888672 L 16.693359 36.962891 C 16.634729 37.021121 16.560472 37.065723 16.476562 37.089844 L 8.6835938 39.316406 L 10.910156 31.521484 A 1.50015 1.50015 0 0 0 10.910156 31.519531 C 10.933086 31.438901 10.975086 31.366709 11.037109 31.304688 L 29.111328 13.232422 z"></path>
                                </svg>
                            </div><div class="bookmark-action ease-in duration-100 cursor-pointer" title="Xóa khỏi danh sách lối tắt">

                            <svg xmlns="http://www.w3.org/2000/svg" class="ease-in duration-100" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="-10 0 1034 1024" width="1em" height="1em">
                               <path fill="currentColor" d="M414.753 181.333c-4.59082 0 -8.66699 2.93848 -10.1191 7.29297l-18.9014 56.707h252.536l-18.9004 -56.707c-1.45117 -4.35449 -5.53027 -7.29297 -10.1211 -7.29297h-194.493h-0.000976562zM705.733 245.333h190.268c17.6729 0 32 14.3271 32 32s-14.3271 32 -32 32
                            h-55.3936l-32.7139 490.641c-5.60156 84.0498 -75.4082 149.359 -159.646 149.359h-272.497c-84.2344 0 -154.042 -65.3096 -159.645 -149.359l-32.71 -490.641h-55.3965c-17.6729 0 -32 -14.3271 -32 -32s14.3271 -32 32 -32h190.269l25.6484 -76.9453
                            c10.1631 -30.4893 38.6973 -51.0547 70.835 -51.0547h194.493c32.1406 0 60.6719 20.5654 70.835 51.0547l25.6514 76.9453h0.00195312zM776.462 309.333h-528.923l32.4258 486.387c3.3623 50.4287 45.2471 89.6133 95.7881 89.6133h272.497
                            c50.543 0 92.4287 -39.1846 95.791 -89.6133l32.4219 -486.387h-0.000976562zM426.668 416c-17.6729 0 -32 14.3271 -32 32v298.667c0 17.6729 14.3271 32 32 32s32 -14.3271 32 -32v-298.667c0 -17.6729 -14.3271 -32 -32 -32zM629.334 448v170.667
                            c0 17.6729 -14.3271 32 -32 32s-32 -14.3271 -32 -32v-170.667c0 -17.6729 14.3271 -32 32 -32s32 14.3271 32 32z"></path>
                            </svg></div></div>
                        </div>
                    </div>
                </tab>
                <tab name="create" title="Tạo nhanh">
                     <div class="w-full p-3">
                        <div class="flex p-2 hover:bg-gray-100 group gap-3
                            flex rounded-lg justify-start items-center relative">
                            <div class="flex items-center justify-center flex-shrink-0 text-gray-600 pl-2 py-1.5">
                                <i class="icon-coins"></i>
                            </div>
                            <div>Ứng lương</div>
                            <IconM></IconM>
                        </div>
                        <div class="flex p-2 hover:bg-gray-100 group gap-3
                            flex rounded-lg justify-start items-center relative">
                            <div class="flex items-center justify-center flex-shrink-0 text-gray-600 pl-2 py-1.5">
                                <i class="icon-questions-circle"></i>
                            </div>
                            <div>Yêu cầu hỗ trợ</div>
                            <IconM></IconM>
                        </div>
                        <div class="h-px w-full bg-gray-100 my-2"></div>
                        <div class="flex p-2 hover:bg-gray-100 group gap-3
                            flex rounded-lg justify-start items-center relative">
                            <div class="flex items-center justify-center flex-shrink-0 text-gray-600 pl-2 py-1.5">
                                <i class="icon-paste"></i>
                            </div>
                            <div>Công việc</div>
                            <IconM></IconM>
                        </div>
                        <div class="flex p-2 hover:bg-gray-100 group gap-3
                            flex rounded-lg justify-start items-center relative">
                            <div class="flex items-center justify-center flex-shrink-0 text-gray-600 pl-2 py-1.5">
                                <i class="icon-project"></i>
                            </div>
                            <div>Dựa án</div>
                            <IconM></IconM>
                        </div>
                        <div class="flex p-2 hover:bg-gray-100 group gap-3
                            flex rounded-lg justify-start items-center relative">
                            <div class="flex items-center justify-center flex-shrink-0 text-gray-600 pl-2 py-1.5">
                                <i class="icon-workflow"></i>
                            </div>
                            <div>Công việc quy trình</div>
                            <IconM></IconM>
                        </div>
                        <div class="flex p-2 hover:bg-gray-100 group gap-3
                            flex rounded-lg justify-start items-center relative">
                            <div class="flex items-center justify-center flex-shrink-0 text-gray-600 pl-2 py-1.5">
                                <i class="icon-clipboard"></i>
                            </div>
                            <div>Đơn từ</div>
                            <IconM></IconM>
                        </div>
                        <div class="flex p-2 hover:bg-gray-100 group gap-3
                            flex rounded-lg justify-start items-center relative">
                            <div class="flex items-center justify-center flex-shrink-0 text-gray-600 pl-2 py-1.5">
                                <i class="icon-manager"></i>
                            </div>
                            <div>Hồ sơ ứng viên</div>
                            <IconM></IconM>
                        </div>
                        <div class="flex p-2 hover:bg-gray-100 group gap-3
                            flex rounded-lg justify-start items-center relative">
                            <div class="flex items-center justify-center flex-shrink-0 text-gray-600 pl-2 py-1.5">
                                <i class="icon-calendar"></i>
                            </div>
                            <div>Lịch phỏng vấn</div>
                            <IconM></IconM>
                        </div>
                        <div class="flex p-2 hover:bg-gray-100 group gap-3
                            flex rounded-lg justify-start items-center relative">
                            <div class="flex items-center justify-center flex-shrink-0 text-gray-600 pl-2 py-1.5">
                                <i class="icon-contract-job"></i>
                            </div>
                            <div>Hợp đồng lao động</div>
                            <IconM></IconM>
                        </div>
                        <div class="flex p-2 hover:bg-gray-100 group gap-3
                            flex rounded-lg justify-start items-center relative">
                            <div class="flex items-center justify-center flex-shrink-0 text-gray-600 pl-2 py-1.5">
                                <i class="icon-price-list"></i>
                            </div>
                            <div>Đơn hàng bán</div>
                            <IconM></IconM>
                        </div>
                        <div class="flex p-2 hover:bg-gray-100 group gap-3
                            flex rounded-lg justify-start items-center relative">
                            <div class="flex items-center justify-center flex-shrink-0 text-gray-600 pl-2 py-1.5">
                                <i class="icon-reply-arrow"></i>
                            </div>
                            <div>Phiếu thu</div>
                            <IconM></IconM>
                        </div>
                        <div class="flex p-2 hover:bg-gray-100 group gap-3
                            flex rounded-lg justify-start items-center relative">
                            <div class="flex items-center justify-center flex-shrink-0 text-gray-600 pl-2 py-1.5">
                                <i class="icon-forward-arrow"></i>
                            </div>
                            <div>Phiếu chi</div>
                            <IconM></IconM>
                        </div>
                     </div>
                </tab>
            </tabs>
            <div class="icon-plus-circle top-3 right-3 text-main transition duration-150 ease-out hover:ease-in cursor-pointer absolute"></div>
        </div>
    </div>

</template>
