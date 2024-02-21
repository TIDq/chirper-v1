<script setup>
import TextcloudLogo from './TextcloudLogo.vue';
import dayjs from 'dayjs';
import relativeTime from 'dayjs/plugin/relativeTime';

dayjs.extend(relativeTime);

defineProps(['chirp'])
</script>

<template>
    <div class="p-6 flex space-x-2">
        <TextcloudLogo/>
        <div class="flex-1">
            <div class="flex justify-between items-center">
                <div>
                    <span class="text-gray-800">{{ chirp.user.name }}</span>
                    <small class="ml-2 text-sm text-gray-600">{{ dayjs(chirp.created_at).fromNow() }}</small>
                </div>
            </div>
            <p class="mt-4 text lg text-gray-900">{{ chirp.message }}</p>
        </div>
    </div>
</template>
