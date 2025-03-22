const verifyJwtToken = async () => {
    try {
        const isTokenValid = await axios.post('/verifyToken', {}, {
            headers: {
                Authorization: `Bearer ${localStorage.getItem('access_token')}`
            }
        });
        return isTokenValid
    } catch (error) {
        console.error(`something went wrong ${error}`);
    }
}