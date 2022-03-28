import { ref } from 'vue'
import axios from "axios";
import { useRouter } from 'vue-router';

export default function useProducts() {
    const Products = ref([])
    const router = useRouter()
    const errors = ref('')
    
    const getProducts = async () => {
        errors.value = ''
        await axios.get('http://127.0.0.1:8000/product-list/')
        Products.value = response.data.data;
    }
    const getProducts_list = async (data) => {
        errors.value = ''
        try {
            await axios.post('http://127.0.0.1:8000/product-list-category', data)
            Products.value = response.data.data;
            // await router.push({name: 'companies.index'})
        } catch (e) {
            if (e.response.status === 422) {
                errors.value = e.response.data.errors
            }
        }
    }
    


    return {
        Products,
        errors,
        getProducts_list,
        getProducts,
    }
}
