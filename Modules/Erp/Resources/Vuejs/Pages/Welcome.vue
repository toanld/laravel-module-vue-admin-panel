<script setup>
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});
</script>

<template>
    <div class="w-[1440px] h-[7069px] relative bg-orange-50">
        <div class="w-[628px] left-[80px] top-[3512px] absolute text-zinc-800 text-[64px] font-medium">Dự án của<br/>chúng tôi</div>
        <img class="w-[411px] h-[520px] left-[80px] top-[3719px] absolute" src="https://via.placeholder.com/411x520" />
        <img class="w-[411px] h-[520px] left-[515px] top-[3719px] absolute" src="https://via.placeholder.com/411x520" />
        <img class="w-[411px] h-[520px] left-[949px] top-[3719px] absolute" src="https://via.placeholder.com/411x520" />
        <div class="w-[411px] left-[80px] top-[4274px] absolute text-zinc-800 text-[32px] font-medium">Chính Kinh Apartment</div>
        <div class="w-[410px] left-[515px] top-[4274px] absolute text-zinc-800 text-[32px] font-medium">Dịch Vọng Apartment</div>
        <div class="w-[410px] left-[950px] top-[4274px] absolute text-zinc-800 text-[32px] font-medium">Xuân Đỉnh Apartment</div>
        <div class="w-[843px] h-[455px] left-[82px] top-[392px] absolute bg-gradient-to-b from-black to-yellow-950"></div>
        <div class="w-[194px] h-[455px] left-[949px] top-[392px] absolute bg-yellow-950 bg-opacity-60"></div>
        <div class="w-[194px] h-[455px] left-[1168px] top-[392px] absolute bg-yellow-950 bg-opacity-60"></div>
        <img class="w-[410px] h-[658px] left-[189px] top-[1713px] absolute" src="https://via.placeholder.com/410x658" />
        <div class="left-[82px] top-[210px] absolute text-black text-8xl font-medium">An Invest</div>
        <div class="left-[80px] top-[44px] absolute justify-start items-start gap-[113px] inline-flex">
            <div class="text-black text-xl font-semibold">AN INVEST</div>
            <div class="justify-start items-start gap-[107px] flex">
                <div class="text-black text-xl font-medium">Trang chủ</div>
                <div class="text-black text-xl font-medium">Giới thiệu</div>
                <div class="text-black text-xl font-medium">Dự án</div>
                <div class="text-black text-xl font-medium">Liên hệ</div>
            </div>
        </div>
        <div class="left-[732px] top-[1713px] absolute text-black text-[64px] font-medium">Dịch vụ Sản phẩm</div>
        <div class="px-6 py-3 left-[732px] top-[2046px] absolute bg-zinc-800 justify-center items-center gap-4 inline-flex">
            <div class="text-zinc-100 text-2xl font-medium">Đầu tư: Xây - Mua - Bán</div>
        </div>
        <div class="px-6 py-3 left-[732px] top-[2131px] absolute bg-zinc-800 justify-center items-center gap-4 inline-flex">
            <div class="text-zinc-100 text-2xl font-medium">Công nghệ Prop - tech</div>
        </div>
        <div class="w-[498px] left-[82px] top-[2573px] absolute text-black text-[64px] font-medium">Giá trị cốt lõi</div>
        <div class="w-[586px] left-[776px] top-[257px] absolute text-right text-zinc-800 text-[32px] font-medium">Đối tác tin cậy cho những nhà đầu tư bất động sản dòng tiền</div>
        <div class="w-[194px] px-10 py-4 left-[697px] top-[763px] absolute bg-zinc-100 justify-center items-center gap-2.5 inline-flex">
            <div class="text-right text-black text-xl font-medium">Xem dự án</div>
        </div>
        <div class="left-[116px] top-[753px] absolute"><span style="text-zinc-100 text-xl font-medium">Dự án<br/></span><span style="text-zinc-100 text-4xl font-medium">Chính Kinh Apartment</span></div>
        <div class="px-6 py-2.5 left-[1150px] top-[37px] absolute bg-yellow-950 justify-center items-center gap-2.5 inline-flex">
            <div class="text-zinc-100 text-xl font-medium">Liên hệ chúng tôi</div>
        </div>
        <img class="w-[1280px] h-[350px] left-[80px] top-[2713px] absolute" src="https://via.placeholder.com/1280x350" />
        <div class="w-[1281px] h-[543px] left-[79px] top-[4588px] absolute">
            <div class="w-[409px] left-[3px] top-0 absolute text-zinc-800 text-[64px] font-medium">Đội ngũ<br/>chuyên gia hàng đầu</div>
            <div class="w-[74px] h-[11px] left-[1207px] top-[532px] absolute justify-start items-start gap-2.5 inline-flex">
                <div class="w-[11px] h-[11px] bg-neutral-200 rounded-full"></div>
                <div class="w-[11px] h-[11px] bg-neutral-200 rounded-full"></div>
                <div class="w-[11px] h-[11px] bg-neutral-200 rounded-full"></div>
                <div class="w-[11px] h-[11px] bg-neutral-600 rounded-full"></div>
            </div>
            <div class="w-[194px] h-[38px] px-10 py-3 left-0 top-[462px] absolute bg-yellow-950 border border-black justify-center items-center gap-2.5 inline-flex">
                <div class="text-right text-zinc-100 text-xl font-medium">Xem tất cả</div>
            </div>
            <div class="w-[300px] left-[2px] top-[324px] absolute text-zinc-800 text-lg font-medium leading-[27px]">AN Invest là công ty đầu tư và quản lý bất động sản, với tên
                gọi "AN" bắt nguồn từ sự an tâm, an lành và an trú.</div>
            <div class="w-[83px] h-[0px] left-[3px] top-[242px] absolute border border-zinc-800"></div>
        </div>
        <img class="w-[629px] h-[715px] left-[708px] top-[5451px] absolute origin-top-left rotate-180" src="https://via.placeholder.com/629x715" />
        <div class="left-[623px] top-[5391px] absolute text-black text-[64px] font-medium">Mục tiêu<br/>phát triển</div>
        <div class="w-[411px] left-[949px] top-[5474px] absolute text-right text-black text-xl font-normal">Metus nec dui est habitasse lorem vitae. Non dui nec enim quam tellus est. Consectetur egestas tellus urna amet imperdiet sed.</div>
        <div class="left-[875px] top-[5633px] absolute text-black text-2xl font-medium">2023</div>
        <div class="left-[875px] top-[6149px] absolute text-black text-2xl font-medium">2024</div>
        <div class="w-[109px] h-[0px] left-[623px] top-[5557px] absolute border border-zinc-800"></div>
        <div class="left-[81px] top-[3113px] absolute justify-start items-start gap-6 inline-flex">
            <div class="w-[302px] pr-[73px] flex-col justify-start items-start gap-[30px] inline-flex">
                <div class="justify-start items-start inline-flex">
                    <div class="w-10 h-10 relative">
                        <div class="w-10 h-10 left-0 top-0 absolute bg-zinc-300"></div>
                    </div>
                </div>
                <div class="self-stretch h-32 flex-col justify-start items-start gap-6 flex">
                    <div class="px-6 py-2.5 bg-zinc-800 justify-center items-center gap-2 inline-flex">
                        <div class="text-zinc-100 text-2xl font-semibold">Bền vững</div>
                    </div>
                    <div class="self-stretch text-zinc-800 text-lg font-normal leading-[27px]">Nghĩ dài hạn, tạo giá trị bền vững cho
                        người dùng và nhà đầu tư.</div>
                </div>
            </div>
            <div class="w-[302px] pr-[73px] flex-col justify-start items-start gap-[30px] inline-flex">
                <div class="justify-start items-start inline-flex">
                    <div class="w-10 h-10 relative">
                        <div class="w-10 h-10 left-0 top-0 absolute bg-zinc-300"></div>
                    </div>
                </div>
                <div class="self-stretch h-32 flex-col justify-start items-start gap-6 flex">
                    <div class="px-4 py-2.5 bg-zinc-800 justify-center items-center gap-2 inline-flex">
                        <div class="text-zinc-100 text-2xl font-semibold">Chuyên nghiệp</div>
                    </div>
                    <div class="self-stretch text-zinc-800 text-lg font-normal leading-[27px]">Chuyên nghiệp thực hiện đúng cam
                        kết, quy trình, tuân thủ pháp luật.</div>
                </div>
            </div>
            <div class="w-[302px] pr-[73px] flex-col justify-start items-start gap-[30px] inline-flex">
                <div class="justify-start items-start inline-flex">
                    <div class="w-10 h-10 relative">
                        <div class="w-10 h-10 left-0 top-0 absolute bg-zinc-300"></div>
                    </div>
                </div>
                <div class="self-stretch h-[101px] flex-col justify-start items-start gap-6 flex">
                    <div class="px-6 py-2.5 bg-zinc-800 justify-center items-center gap-2 inline-flex">
                        <div class="text-zinc-100 text-2xl font-semibold">Chính trực</div>
                    </div>
                    <div class="self-stretch text-zinc-800 text-lg font-normal leading-[27px]">Làm mọi thứ từ tâm, luôn minh bạch
                        thông tin.</div>
                </div>
            </div>
            <div class="w-[302px] pr-[73px] flex-col justify-start items-start gap-[30px] inline-flex">
                <div class="justify-start items-start inline-flex">
                    <div class="w-10 h-10 relative">
                        <div class="w-10 h-10 left-0 top-0 absolute bg-zinc-300"></div>
                    </div>
                </div>
                <div class="self-stretch h-32 flex-col justify-start items-start gap-6 flex">
                    <div class="px-6 py-2.5 bg-zinc-800 justify-center items-center gap-2 inline-flex">
                        <div class="text-zinc-100 text-2xl font-semibold">An toàn</div>
                    </div>
                    <div class="self-stretch text-zinc-800 text-lg font-normal leading-[27px]">An toàn cho con người, vốn nhà đầu tư
                        luôn phải đặt lên hàng đầu.</div>
                </div>
            </div>
        </div>
        <div class="w-[46px] h-[46px] p-2.5 left-[1068px] top-[763px] absolute bg-zinc-100 justify-center items-center gap-2.5 inline-flex"></div>
        <div class="w-[46px] h-[46px] p-2.5 left-[1290px] top-[763px] absolute bg-zinc-100 justify-center items-center gap-2.5 inline-flex"></div>
        <div class="w-[519px] left-[732px] top-[1857px] absolute text-zinc-800 text-xl font-medium leading-[30px]">Với đội ngũ chuyên gia có hơn 25 năm kinh nghiệm trong
            các lĩnh vực đầu tư, công nghệ, kiến trúc - xây dựng, An
            Invest sẽ trở thành đối tác đáng tin cậy cho những nhà đầu
            tư mong muốn khai thác tối đa tiềm năng từ thị trường
            BĐS dòng tiền.</div>
        <div class="w-[543px] left-[817px] top-[2596px] absolute text-right text-zinc-800 text-lg font-medium leading-[27px]">AN Invest là công ty đầu tư và quản lý bất động sản, với tên
            gọi "AN" bắt nguồn từ sự an tâm, an lành và an trú, đồng
            thời gợi nhắc đến sự đảm bảo và niềm tin của khách hàng
            và nhà đầu tư.</div>
        <div class="w-[410px] h-[500px] left-[515px] top-[4588px] absolute">
            <div class="w-[410px] h-[500px] left-0 top-0 absolute bg-gradient-to-b from-black to-black"></div>
            <div class="w-[247px] h-[74px] left-[20px] top-[396px] absolute flex-col justify-start items-start gap-[18px] inline-flex">
                <div class="w-[217px] text-zinc-100 text-2xl font-semibold">Mr.<br/>Nguyễn Ngọc Điệp</div>
                <div class="w-[247px] text-zinc-100 text-base font-normal">Chủ tịch Hội đồng Quản trị - CEO</div>
            </div>
        </div>
        <div class="w-[193px] h-[500px] left-[950px] top-[4588px] absolute">
            <div class="w-[193px] h-[500px] left-0 top-0 absolute bg-gradient-to-b from-black to-black"></div>
        </div>
        <div class="w-[193px] h-[500px] left-[1167px] top-[4588px] absolute">
            <div class="w-[193px] h-[500px] left-0 top-0 absolute bg-gradient-to-b from-black to-black"></div>
        </div>
        <img class="w-[1171px] h-[374px] left-[1360px] top-[1191px] absolute origin-top-left rotate-180" src="https://via.placeholder.com/1171x374" />
        <div class="left-[82px] top-[1006px] absolute flex-col justify-end items-start gap-8 inline-flex">
            <div class="text-black text-[64px] font-medium">An tâm</div>
            <div class="text-black text-[64px] font-medium">An lành</div>
            <div class="text-black text-[64px] font-medium">An trú</div>
        </div>
        <div class="w-[628px] left-[734px] top-[1006px] absolute text-zinc-800 text-lg font-medium leading-[27px]">AN Invest là công ty đầu tư và quản lý bất động sản, với tên
            gọi "AN" bắt nguồn từ sự an tâm, an lành và an trú, đồng
            thời gợi nhắc đến sự đảm bảo và niềm tin của khách hàng
            và nhà đầu tư.</div>
        <div class="w-[114px] h-[0px] left-[82px] top-[318px] absolute border border-zinc-800"></div>
        <div class="w-[83px] h-[0px] left-[82px] top-[1245px] absolute border border-zinc-800"></div>
        <div class="w-[85px] h-[0px] left-[732px] top-[1802px] absolute border border-zinc-800"></div>
        <div class="w-[85px] h-[0px] left-[80px] top-[2662px] absolute border border-zinc-800"></div>
        <div class="w-[83px] h-[0px] left-[82px] top-[3669px] absolute border border-zinc-800"></div>
        <div class="w-[627px] left-[733px] top-[3632px] absolute text-right text-black text-xl font-normal">Metus nec dui est habitasse lorem vitae. Non dui nec enim quam tellus est. Consectetur egestas tellus urna amet imperdiet sed.</div>
        <div class="w-[1440px] h-[418px] left-0 top-[6651px] absolute">
            <div class="w-[1440px] h-[418px] left-0 top-0 absolute bg-zinc-800"></div>
            <div class="w-[106px] h-[111px] left-[75px] top-[166px] absolute flex-col justify-start items-start gap-[30px] inline-flex">
                <div class="text-white text-2xl font-medium">Giới thiệu</div>
                <div class="text-white text-2xl font-medium">Dự án</div>
                <div class="text-white text-2xl font-medium">Liên hệ</div>
            </div>
            <div class="left-[75px] top-[91px] absolute text-white text-[32px] font-bold">AN INVEST</div>
            <div class="w-[425px] h-[106px] left-[406px] top-[175px] absolute flex-col justify-start items-start gap-8 inline-flex">
                <div class="text-white text-xl font-medium">+84 12 34 56 78</div>
                <div class="text-white text-xl font-medium">102, phố Thái Thịnh, quận Đống Đa, TP. Hà Nội</div>
                <div class="text-white text-xl font-medium">contact@aninvest.com</div>
            </div>
        </div>
        <div class="px-6 py-3 left-[902px] top-[5770px] absolute bg-zinc-800 justify-center items-center gap-2 inline-flex">
            <div class="text-zinc-100 text-2xl font-medium">Đầu tư 10 tòa BĐS</div>
        </div>
        <div class="px-6 py-3 left-[902px] top-[5989px] absolute bg-zinc-800 justify-center items-center gap-2 inline-flex">
            <div class="text-zinc-100 text-2xl font-medium">10 tỷ vnđ lợi nhuận</div>
        </div>
        <div class="w-4 h-4 left-[836px] top-[5783px] absolute bg-white rounded-full border border-zinc-800"></div>
        <div class="w-4 h-4 left-[836px] top-[6002px] absolute bg-white rounded-full border border-zinc-800"></div>
        <div class="px-4 py-2 left-[82px] top-[4319px] absolute bg-zinc-800 justify-center items-center gap-2 inline-flex">
            <div class="text-zinc-100 text-xl font-medium">Xem chi tiết</div>
        </div>
        <div class="px-4 py-2 left-[515px] top-[4319px] absolute bg-zinc-800 justify-center items-center gap-2 inline-flex">
            <div class="text-zinc-100 text-xl font-medium">Xem chi tiết</div>
        </div>
        <div class="px-4 py-2 left-[950px] top-[4319px] absolute bg-zinc-800 justify-center items-center gap-2 inline-flex">
            <div class="text-zinc-100 text-xl font-medium">Xem chi tiết</div>
        </div>
        <div class="w-12 h-12 left-[599px] top-[5120px] absolute">
            <div class="w-12 h-12 left-0 top-0 absolute bg-zinc-800"></div>
            <div class="w-[35.20px] h-[35.20px] left-[6.40px] top-[6.40px] absolute">
                <div class="w-[35.20px] h-[35.20px] left-0 top-0 absolute bg-zinc-300"></div>
            </div>
        </div>
        <div class="origin-top-left rotate-180 w-12 h-12 left-[563px] top-[5120px] absolute">
            <div class="w-12 h-12 left-0 top-0 absolute origin-top-left rotate-180 bg-zinc-800"></div>
            <div class="origin-top-left rotate-180 w-[35.20px] h-[35.20px] left-[-6.40px] top-[6.40px] absolute">
                <div class="w-[35.20px] h-[35.20px] left-0 top-0 absolute origin-top-left rotate-180 bg-zinc-100"></div>
            </div>
        </div>
        <div class="w-[1440px] h-[286px] left-0 top-[6365px] absolute">
            <div class="w-[1440px] h-[286px] left-0 top-0 absolute bg-black bg-opacity-50"></div>
            <div class="w-[519px] h-[46px] px-6 py-4 left-[392px] top-[143px] absolute bg-zinc-100 justify-start items-center gap-2 inline-flex">
                <div class="text-right text-black text-xl font-normal">Email</div>
            </div>
            <div class="w-[97px] h-[46px] px-6 py-4 left-[940px] top-[143px] absolute bg-zinc-100 justify-center items-center gap-2 inline-flex">
                <div class="text-right text-black text-xl font-medium">Send</div>
            </div>
            <div class="left-[75px] top-[135px] absolute text-zinc-100 text-[64px] font-medium">Liên hệ</div>
        </div>
    </div>
</template>
